
fun dados(calculadora: (Int, Int) -> Int): Int {
    val base = 4
    val altura = 5
    return calculadora(base, altura)
}

fun calcular(base: Int, altura: Int): Int {
    return base * altura
}

fun main(args: Array<String>) {
    println("A área do retângulo é")
    println(dados(::calcular))
}

