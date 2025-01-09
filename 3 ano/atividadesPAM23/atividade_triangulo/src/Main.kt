import java.awt.geom.Area


fun calculo(base: Int, altura: Int, area: Boolean): Int {
    return if (area) {
        (base * altura) / 2
    } else {
        2 * (base + altura)
    }
}

fun main(args: Array<String>) {
    val base = 5
    val altura = 8
    val calcularArea = true

    println("Área do triângulo: ${calculo(base, altura, calcularArea)}")
}

