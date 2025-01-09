
fun calcularAreaTrapezio(baseMaior: Double, baseMenor: Double, altura: Double): Double {
    return ((baseMaior + baseMenor) * altura) / 2
}

fun main() {
    val baseMaior = 10.0
    val baseMenor = 6.0
    val altura = 4.0
    val areaTrapezio = calcularAreaTrapezio(baseMaior, baseMenor, altura)
    println("Área do trapézio: $areaTrapezio")
}


