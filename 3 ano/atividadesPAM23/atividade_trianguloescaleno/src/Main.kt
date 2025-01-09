fun calcularArea(base: Double, altura: Double): Double {
    return 0.5 * base * altura
}

fun main() {
    val base = 3.0 // Substitua 6.0 pelo comprimento da base do seu triângulo escaleno
    val altura = 2.0 // Substitua 4.0 pela altura do seu triângulo escaleno

    val area = calcularArea(base, altura)

    println("Área do triângulo escaleno: $area")
}