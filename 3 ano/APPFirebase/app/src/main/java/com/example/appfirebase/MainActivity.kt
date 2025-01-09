package com.example.appfirebase

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.Image
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.lazy.LazyColumn
import androidx.compose.foundation.lazy.items
import androidx.compose.material3.*
import androidx.compose.runtime.*
import androidx.compose.ui.Modifier
import androidx.compose.ui.layout.ContentScale
import androidx.compose.ui.res.painterResource
import androidx.compose.ui.unit.dp
import com.example.appfirebase.ui.theme.APPFirebaseTheme
import com.google.firebase.firestore.FirebaseFirestore
import com.google.firebase.firestore.ktx.firestore
import com.google.firebase.ktx.Firebase
import com.example.appfirebase.R

class MainActivity : ComponentActivity() {
    private val db: FirebaseFirestore = Firebase.firestore

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            APPFirebaseTheme {
                Surface(
                    modifier = Modifier.fillMaxSize(),
                    color = MaterialTheme.colorScheme.background
                ) {
                    App(db)
                }
            }
        }
    }
}

@Composable
fun App(db: FirebaseFirestore) {
    var nome by remember { mutableStateOf("") }
    var telefone by remember { mutableStateOf("") }
    var turma by remember { mutableStateOf("") }

    var clientes by remember { mutableStateOf(listOf<HashMap<String, String>>()) }
    var dadosCarregados by remember { mutableStateOf(false) }

    LaunchedEffect(Unit) {
        try {
            db.collection("Clientes").get()
                .addOnSuccessListener { documents ->
                    val novosClientes = mutableListOf<HashMap<String, String>>()
                    for (document in documents) {
                        val cliente = hashMapOf(
                            "id" to document.id,
                            "nome" to "${document.data["nome"]}",
                            "telefone" to "${document.data["telefone"]}",
                            "turma" to "${document.data["turma"]}"
                        )
                        novosClientes.add(cliente)
                    }
                    clientes = novosClientes
                    dadosCarregados = true
                }
                .addOnFailureListener { e ->
                    Log.w("Firestore", "Error getting documents", e)
                }
        } catch (e: Exception) {
            Log.e("Firestore", "Erro ao buscar dados: ${e.message}")
        }
    }

    Column(
        modifier = Modifier
            .fillMaxWidth()
            .padding(16.dp)
    ) {
        Text(
            text = "App Firebase Firestore",
            style = MaterialTheme.typography.headlineSmall,
            modifier = Modifier.padding(bottom = 16.dp)
        )

        Image(
            painter = painterResource(id = R.drawable.atvpam),
            contentDescription = "Imagem personalizada",
            contentScale = ContentScale.Crop,
            modifier = Modifier
                .fillMaxWidth()
                .height(200.dp)
                .padding(bottom = 16.dp)
        )

        // Campos de entrada de nome, telefone e turma
        InputField(label = "Nome:", value = nome, onValueChange = { nome = it })
        InputField(label = "Telefone:", value = telefone, onValueChange = { telefone = it })
        InputField(label = "Turma:", value = turma, onValueChange = { turma = it })

        Spacer(modifier = Modifier.height(16.dp))

        Button(onClick = {
            val pessoas = hashMapOf("nome" to nome, "telefone" to telefone, "turma" to turma)
            db.collection("Clientes").add(pessoas)
                .addOnSuccessListener { documentReference ->
                    Log.d("Firestore", "DocumentSnapshot written with ID: ${documentReference.id}")
                    // Limpar campos após cadastro
                    nome = ""
                    telefone = ""
                    turma = ""

                    val novoCliente = hashMapOf(
                        "id" to documentReference.id,
                        "nome" to nome,
                        "telefone" to telefone,
                        "turma" to turma
                    )
                    clientes = clientes + novoCliente
                }
                .addOnFailureListener { e ->
                    Log.w("Firestore", "Error adding document", e)
                }
        }) {
            Text(text = "Cadastrar")
        }

        Spacer(modifier = Modifier.height(16.dp))

        if (dadosCarregados) {
            LazyColumn(modifier = Modifier.fillMaxWidth()) {
                items(clientes) { cliente ->
                    Card(
                        modifier = Modifier
                            .fillMaxWidth()
                            .padding(8.dp), // Adicionando um espaço entre os cartões
                        elevation = CardDefaults.cardElevation(defaultElevation = 4.dp)
                    ) {
                        Row(modifier = Modifier.fillMaxWidth().padding(16.dp)) {
                            Text(
                                text = cliente["nome"] ?: "--",
                                modifier = Modifier.weight(0.3f),
                                style = MaterialTheme.typography.bodyMedium
                            )
                            Spacer(modifier = Modifier.width(8.dp))
                            Text(
                                text = cliente["telefone"] ?: "--",
                                modifier = Modifier.weight(0.3f),
                                style = MaterialTheme.typography.bodyMedium
                            )
                            Spacer(modifier = Modifier.width(8.dp))
                            Text(
                                text = cliente["turma"] ?: "--",
                                modifier = Modifier.weight(0.3f),
                                style = MaterialTheme.typography.bodyMedium
                            )

                            Button(
                                onClick = {
                                    cliente["id"]?.let { id ->
                                        db.collection("Clientes").document(id).delete()
                                            .addOnSuccessListener {
                                                Log.d("Firestore", "DocumentSnapshot successfully deleted!")
                                                // Atualiza a lista de clientes
                                                clientes = clientes.filterNot { it["id"] == id } // Cria nova lista sem o cliente removido
                                            }
                                            .addOnFailureListener { e ->
                                                Log.w("Firestore", "Error deleting document", e)
                                            }
                                    }
                                },
                                modifier = Modifier.padding(start = 8.dp)
                            ) {
                                Text(text = "Excluir")
                            }
                        }
                    }
                }
            }
        }
    }
}

@Composable
fun InputField(label: String, value: String, onValueChange: (String) -> Unit) {
    Row(modifier = Modifier.fillMaxWidth()) {
        Column(modifier = Modifier.fillMaxWidth(0.3f)) {
            Text(text = label)
        }
        Column {
            TextField(value = value, onValueChange = onValueChange)
        }
    }
}


