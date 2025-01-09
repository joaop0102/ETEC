
fun calcularAreaTrianguloIsosceles(base: Double, altura: Double): Double {
    return (base * altura) / 2
}

fun main() {
    val base = 5.0
    val altura = 8.0
    val area = calcularAreaTrianguloIsosceles(base, altura)
    println("A área do triângulo isósceles é: $area")
}

