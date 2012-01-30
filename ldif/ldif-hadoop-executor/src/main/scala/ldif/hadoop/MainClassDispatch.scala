package ldif.hadoop

/**
 * Created by IntelliJ IDEA.
 * User: andreas
 * Date: 1/10/12
 * Time: 3:59 PM
 * To change this template use File | Settings | File Templates.
 */

object MainClassDispatcher {
  def main(args : Array[String])
  {
    if(args.length<1) {
      System.err.println("Error: No arguments given.")
      exitDispatcher
    }
    val app = args(0)
    val parameters = args.slice(1, args.length)
    app match {
      case "scheduler" => Ldif.main(parameters)
      case "integrate" => HadoopIntegrationJob.main(parameters)
      case "urisets" => UriSets.execute(parameters)
      case _ => System.err.println("Error: command " + app + " invalid.")
        exitDispatcher
    }
  }

  private def exitDispatcher {
    System.err.println("Usages: hadoop jar ldif-hadoop-executor* scheduler <schedulerConfig>")
    System.err.println("        hadoop jar ldif-hadoop-executor* integrate <integrationJobConfig>")
    System.err.println("        hadoop jar ldif-hadoop-executor* urisets <input path> <output path>")
    System.exit(1)
  }
}