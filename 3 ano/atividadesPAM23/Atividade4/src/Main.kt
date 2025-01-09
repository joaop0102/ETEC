
inline fun trasacao(funcao: () -> Unit){
    println("Abrindo trasação...")
    try {
        funcao()
    }finally {
        println("Fechando trasanção")
    }
}

fun main(args: Array<String>) {
    trasacao{
        println("Executando SQL 1...")
        println("Executando SQL 2...")
        println("Executando SQL 3...")
    }
}

