import kotlin.math.sqrt

fun calcularArea(lado: Double): Double {
    return (lado * lado * sqrt(3.0)) / 4
}

fun main() {
    var lado = 5.0
    val area = calcularArea(lado)

    println("Área do triângulo equilátero: $area")
}