fun calcularAreaLosango(diagonalMaior: Double, diagonalMenor: Double): Double {
    return (diagonalMaior * diagonalMenor) / 2
}

fun main() {
    val diagonalMaior = 8.0
    val diagonalMenor = 6.0
    val areaLosango = calcularAreaLosango(diagonalMaior, diagonalMenor)
    println("Área do losango: $areaLosango")
}