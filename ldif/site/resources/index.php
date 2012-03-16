<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>LDIF – Linked Data Integration Framework</title>

  

  
  
  <style>
body { background: white; color: black; font-family: sans-serif; line-height: 1.4em; padding: 2.5em 3em; margin: 0; }
:link, :visited { color: #00c; }
a:link img { border: none; }
a:visited img { border: none; }
h1, h2, h3, h4 { background: white; color: #800; }
h1 { font: 170% sans-serif; margin: 0; }
h2 { clear: both; font: 140% sans-serif; margin: 1.5em 0 -0.5em 0; }
h3 { font: 120% sans-serif; margin: 1.5em 0 -0.5em 0; }
h4 { font: 100% sans-serif; margin: 0.9em 0 -0.6em 0; }
h5 { font: italic 100% sans-serif; margin: 0.7em 0 -0.8em 0;}
pre { background: #fff6bb; font-family: monospace; line-height: 1.2em; padding: 1em 2em; }
dt { font-weight: bold; margin-top: 0; margin-bottom: 0; }
dd { margin-top: 0; margin-bottom: 0; }
code, tt { font-family: monospace; }
ul.toc { list-style-type: none; }
ol.toc li a { text-decoration: none; }
.note { color: red; }
#header { border-bottom: 1px solid #ccc; }
#logo { float: right; margin-bottom: 10px; }
#authors { clear: right; float: right; font-size: 80%; text-align: right; }
#logo, #authors { min-width: 250px; }
#content { margin: 2em auto 0 0; text-align: justify }
#footer { border-top: 1px solid #ccc; color: #aaa; margin: 2em 0 0; }
#top-container { height: 150px; width: 750px; padding: 20px; }
#purpose { font-size: 110%; letter-spacing: 0.05em; word-spacing: 0.15em; width: 700px; margin: 0 auto 40px auto; }
#boxcontainer { width: 670px; margin-left: auto; margin-right: auto; }
.box { border: 1px solid #D3D3D3; height: 75px; text-align: center; float: left; margin-right: 20px; }
.box:hover { background: none repeat scroll 0 0 #FCFDFF; box-shadow: 0 0 9px 1px #DFEFFF; }
.box a:link, .box a:visited, .box a:hover, .box a:active { color: #1C5489; display: block; font-size: 110%; margin-left: 5px; min-height: 55px; padding: 9px 5px 5px 5px; text-decoration: none; }		
.box a:hover, .box a:active { color: #16426B !important; cursor: pointer; text-decoration: none !important; }
.box a span { display: block; margin-left: 40px; text-align: left; }
.box a span small { color: #888; font-size: 70%; }

#downloadbox { width: 240px; }
#quickstartbox, #supportbox { width: 175px; }
#downloadbox a span { padding: 10px 5px; }
#quickstartbox a span, #supportbox a span { padding: 15px 5px; }

#downloadbox a { background: url("img/arrow_down_32.png") no-repeat scroll 5px 20px transparent; }
#quickstartbox a { background: url("img/clock_32.png") no-repeat scroll 5px 20px transparent; }
#supportbox a { background: url("img/comment_32.png") no-repeat scroll 5px 20px transparent; }

@media Print {
* { font-size: 92%; }
body { padding: 0; line-height: 1.2em; }
#content { margin: 0; width: 100%; }
}
@media Aural {
h1 { stress: 20; richness: 90; }
h2 { stress: 20; richness: 90; }
h3 { stress: 20; richness: 90; }
.hide { speak: none; }
dt { pause-before: 20%; }
pre { speak-punctuation: code; }
}
.Stil1 {color: #FF0000}
table {border-collapse: collapse; margin-bottom: .75em; border-top: 1px solid #D4DCE8; border-bottom: 1px solid #D4DCE8}
table th {text-align: left; background: #EAF3FA; padding: .5em .9em; height: 21px; font-weight: bold; font-size: 1em; color: #333}
table th a {text-decoration: none !important}
table td {vertical-align: top; text-align: left; padding: .5em 1em; border-bottom: 1px solid #eee}
table tr.even {background-color: #fff}
table tr.odd {background-color: #f6f6f6}
  </style>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  
  <meta http-equiv="content-type" content="text/html; charset=utf-8"></head><body>
<?php $wbsg_project = "LDIF"; include_once('C:\!htdocs\navbar.inc.php'); ?>
<div id="logo" align="right"><a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/index.html"><img src="img/fu-logo.gif" alt="Freie Universität Berlin Logo" border="0"></a>&nbsp;<br>
<a href="http://mes-semantics.com"><img src="img/mes-semantics.png" alt="mes|semantics"></a></div>

<div id="header">
<h1 style="font-size: 250%;">LDIF – Linked Data Integration Framework </h1>
</div>

<div id="tagline">A framework for building Linked Data applications
</div>

<div id="authors"><a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/team/SchultzAndreas.html">Andreas
Schultz</a><br>
<a href="mailto:a.matteini@mes-info.de">Andrea Matteini</a><br>
<a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/team/IseleRobert.html">Robert
Isele</a><br>
<a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/team/BizerChristian.html">Chris
Bizer</a><br>
<a href="mailto:c.becker@mes-info.de">Christian
Becker</a><br>
</div>

<div id="content">
<div id="top-container">
<div id="purpose">LDIF translates heterogeneous Linked Data from the
Web into a clean, local target representation while keeping track of
data
provenance.</div>
<div id="boxcontainer">
<div id="downloadbox" class="box"> <a href="http://www4.wiwiss.fu-berlin.de/bizer/ldif/releases/ldif-0.4.zip"><span>Download
LDIF<br>
<small>v0.4, released 2012-01-10</small></span></a> </div>
<div id="quickstartbox" class="box"> <a href="#quickstart"><span>Quick
Start</span></a> </div>
<div id="supportbox" class="box"> <a href="#feedback"><span>Get Support</span></a>
</div>
</div>
</div>
<h2 id="news">News</h2>
<ul>
  <li>
	<strong>02/06/2012: Presentation:</strong> LDIF is presented at <a href="http://semtechbizberlin2012.semanticweb.com/">SEMTECHBIZ Berlin 2012</a> (<a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BeckerMatteini-LDIF-SemTechBerlin2012-Talk.pdf">Slides</a>).
  </li>
  <li>
     <strong>01/13/2012: Interview:</strong> <a href="http://semanticweb.com">semanticweb.com</a> speaks with Christian Becker on how <a href="http://semanticweb.com/easing-the-job-of-working-with-linked-data_b25940">LDIF eases the job of working with Linked Data.</a>
   </li>
  <li>
      <strong>01/10/2012: Version 0.4 Scale-out released.</strong>  Up till now, LDIF stored data
purely in-memory which restricted the amount of data that could be
processed. Version 0.4 provides two alternative implementations of the LDIF
runtime environment which allow LDIF to scale to large data sets: 1. The new
triple store backed implementation scales to larger data sets on a single
machine with lower memory consumption at the expense of processing time. 2.
The new Hadoop-based implementation provides for processing very large data
sets on a Hadoop cluster, for instance within Amazon EC2. A comparison of the
performance of all three implementations of the runtime environment is found
on the <a href="http://www.assembla.com/spaces/ldif/wiki/Benchmark">LDIF benchmark page</a></li>
  <li><strong>11/03/2011: Version 0.3.1 released.</strong> Minor
release: updated the music use case, optimized Entity Builder memory
usage. </li>
  <li><strong>10/06/2011: Version 0.3 released.</strong> The
third
LDIF release provides data access modules for gathering data from the
Web via file download, crawling or accessing SPARQL endpoints. Web data
is cached locally for further processing.&nbsp; A scheduler provides
for launching data import and
integration jobs as well as for regularly updating the local cache with
data from remote sources. We also added a second use case that shows
how LDIF is used&nbsp; to gather and integrate data from several
music-related data sources.<br>
  </li>
  <li><strong>8/25/2011: Version 0.2 released.</strong> The second
LDIF release provides improved performance (faster data loading,
parallelization of the data translation), smaller memory footprint, a
new N-Triples output module, new performance evaluation results for use
cases up to 100 million triples.<br>
  </li>
  <li><strong>6/29/2011: Version 0.1 released.</strong> This alpha
version provides for translating data that is represented using
different source vocabularies into a single target vocabulary and for
replacing different URIs that refer to the same real-world entity with
a single target URI.</li>
</ul>
<h2 id="contents">Contents</h2>
<ol class="toc">
  <li><a href="#about">About LDIF</a></li>
  <li><a href="#components">LDIF components</a></li>
  <li><a href="#configuration">Configuration options</a></li>
  <li><a href="#quickstart">Quick start</a></li>
  <ul>
    <li><a href="#inmemoryquickstart">Single machine / In-memory</a></li>
    <li><a href="#rdfstorequickstart">Single machine / RDF Store</a></li>
    <li><a href="#hadoopquickstart">Cluster / Hadoop</a></li>
  </ul>
  <li><a href="#examples">Examples</a><br>
  </li>
  <ul>
    <li><a href="#example1">Using LDIF to integrate Data from the Music
Domain</a></li>
    <li><a href="#example2">Using LDIF to integrate Life Science Data </a></li>
  </ul>
  <li><a href="#performance">Performance Evaluation</a> </li>
  <li><a href="#development">Source code and development</a></li>
  <li><a href="#history">Version history</a></li>
  <li><a href="#feedback">Support and Feedback</a></li>
  <li><a href="#references">References</a></li>
  <li><a href="#acknowledgments">Acknowledgments</a></li>
</ol>
<h2 id="about">1. About LDIF<br>
</h2>
<p>The <a href="http://linkeddatabook.com/editions/1.0/index.html#htoc23">Web of
Linked Data</a>
grows rapidly and contains data from a wide range of different domains,
including life science data, geographic data, government data, library
and media data, as well as cross-domain data sets such as DBpedia or
Freebase. <a href="http://linkeddatabook.com/editions/1.0/index.html#htoc75">Linked
Data applications</a> that want to consume data from this global data
space face the challenges that:</p>
<ol>
  <li> data sources use a wide range of different RDF vocabularies to
represent data about the same type of entity. </li>
  <li>the
same real-world entity, for instance a person or a place, is
identified with different URIs within different data sources. </li>
</ol>
<p>This usage of different vocabularies as well as the usage of URI
aliases makes it very cumbersome for an application
developer to write <a href="http://www.w3.org/TR/rdf-sparql-query/">SPARQL</a>
queries against Web data which originates from multiple sources. In
order to ease using Web data in the application context, it is thus
advisable to translate data to a single target vocabulary (<a href="http://linkeddatabook.com/editions/1.0/index.html#htoc86">vocabulary
mapping</a>) and to replace URI aliases with a single target URI on the
client
side (<a href="http://linkeddatabook.com/editions/1.0/index.html#htoc87">identity
resolution</a>), before starting to ask SPARQL queries against the
data. </p>
<p>Up-till-now, there have not been any integrated tools that help
application developers with these tasks. With LDIF, we try to fill this
gap and provide an open-source Linked Data Integration Framework
that can be used by Linked Data applications to translate Web data and
normalize URI while keeping track of data provenance.
</p>
<p>The LDIF integration pipeline consists of the following steps:
</p>
<ol>
  <li><b>Collect Data</b>: Import modules locally replicate data sets
via file download, crawling or SPARQL.</li>
  <li><b>Map to Schema</b>: An expressive mapping language allows for
translating data from
the various vocabularies that are used on the Web into a consistent,
local target vocabulary.</li>
  <li><b>Resolve Identities</b>: An identity resolution component
discovers URI aliases in the input data and replaces them with a
single target URI based on user-provided matching heuristics.</li>
  <li><b>Output</b>: LDIF outputs the integrated data in a single file.
For provenance tracking, LDIF employs the Named Graphs data model.</li>
</ol>
<p>The figure below shows the schematic <a href="http://linkeddatabook.com/editions/1.0/index.html#htoc84">architecture
of Linked Data applications</a>
that
implement the crawling/data warehousing pattern. The figure highlights
the steps of the data integration process that are currently
supported by LDIF.</p>
<p style="text-align: left; margin-left: 120px;"><img alt="Example-architecture of an integration aware Linked Data application" src="img/linkeddataapp.png"></p>
<h2 id="components">2. LDIF Components</h2>
<p>The LDIF Framework consists of a Scheduler, Data Import and an Integration component with a set of
pluggable modules. These modules are organized as data input, data transformation and data output.
</p>
<img alt="LDIF components" src="img/LDIFcomponents.png">
<p>Currently, we have implemented the following modules: </p>


<h3>Scheduler</h3>
<p>
The Scheduler is used for triggering pending data import jobs or integration jobs. It is configured with an XML document (see <a href="#scheduler">Configuration</a>) and offers several ways to express when and how often a certain job should be executed.

<br/>
This component is useful when you want to load external data or run the integration periodically, otherwise you could just run the integration component.

<h3>Data Import</h3>
<p>LDIF provides access modules for replicating data sets locally via
file download, crawling or SPARQL. These different types of <a href="#importjob">import jobs</a> generate <a href="#provenance">provenance
metadata</a>,
which is tracked throughout the integration process. Import jobs are
managed by a scheduler that can be
configured to refresh (<span style="font-style: italic;">hourly</span>,
<span style="font-style: italic;">daily</span> etc.) the local cache
for each source. </p>
<h4>Triple/Quad Dump Import</h4>
<p>In order to get a local replication of data sets from the Web of
Data
the simplest way is to download a file containing the data set. The
triple/quad dump import does exactly this, with the difference that
LDIF generates a provenance graph for a triple dump import, whereas it
takes the given graphs from a quad dump import as provenance graphs.</p>
<h4>Crawler Import</h4>
<p>
Data sets that can only be accessed via dereferencable URIs are a good
candidate for a crawler. In LDIF we thus integrated <a href="http://code.google.com/p/ldspider/">LDSpider</a> for crawl
import jobs. The configuration files for crawl import jobs are
specified in the <a href="#configuration">configuration</a> section.
Each crawled URI is put into a seperate named graph for provenance
tracking.</p>
<h4>SPARQL Import</h4>
<p>Data sources that can be accessed via SPARQL are replicated by
LDIF's
SPARQL access module. The relevant data to be queried can be further
specified in the configuration file for a SPARQL import job. Data from
each SPARQL import job gets tracked by its own named graph.</p>


<h3>Integration Runtime Environment</h3>

<p>The integration component manages the data
flow between the various stages/modules, the caching of the intermediate
results and the execution of the different modules for each stage.</p>

<h4>Data Input</h4>

<p>The integration component expects input data to be represented as Named Graphs and be stored
in <a href="http://sw.deri.org/2008/07/n-quads/">N-Quads format</a>
accessible locally - the Web access modules convert any imported data
into N-Quads format. </p>



<h4>Transformation</h4>
<p>LDIF provides trasformation modules for vocabulary mapping and
identity resolution.</p>
<h5>R2R Data Translation</h5>
<p>LDIF employs the <a href="http://www4.wiwiss.fu-berlin.de/bizer/r2r/">R2R Framework</a>
to translate Web data that is represented using terms from different
vocabularies into a single target vocabulary. Vocabulary mappings are
expressed using the <a href="http://www4.wiwiss.fu-berlin.de/bizer/r2r/spec/">R2R Mapping
Language</a>.
The language provides for simple transformations as well as for more
complex structural transformations and property value transformations
such as normalizing different units of measurement or complex string
manipulations. The syntax of the
R2R Mapping Language is very similar to the query language SPARQL,
which eases the learning curve. The expressivity of the language
enabled us to deal with all requirements that we have encountered so
far when translating Linked Data from the Web into a target
representation (evaluation in [<a href="#references">2</a>]).&nbsp; Simple
class/property-renaming mappings which often form the majority in an
integration use case can also be expressed in OWL/RDFS (e.g <span style="font-family: monospace;">ns1:class rdfs:subClassOf ns2:clazz</span>).<span style="text-decoration: underline;"></span>
<br/>An overview and examples for mappings are given on the <a href="http://www4.wiwiss.fu-berlin.de/bizer/r2r/">R2R website</a>.
The <a href="http://www4.wiwiss.fu-berlin.de/bizer/r2r/spec/">specification and user manual</a> is provided as a separate document.<br>
</p>
<h5>Silk Identity Resolution </h5>
<p>
LDIF employs the <a href="http://www4.wiwiss.fu-berlin.de/bizer/silk/">Silk
Link Discovery Framework</a>
to find different URIs that are used within different data sources to
identify the same real-world entity. For each set of duplicates which
have been identified by Silk, LDIF replaces all URI aliases with a
single target URI within the output data. In addition, it adds
owl:sameAs links pointing at the original URIs, which makes it possible
for applications to refer back to the data sources on the Web. If the
LDIF input data already contains owl:sameAs links, the referenced
URIs are normalized accordingly (optional, see <a href="#configuration">configuration</a>).
Silk is a
flexible identity
resolution framework that allows the user to specify identity
resolution heuristics which combine different types of matchers using
the declarative <a href="http://www4.wiwiss.fu-berlin.de/bizer/silk/spec/">Silk - Link
Specification Language</a>.
<br>An overview and examples can be found on the <a href="http://www4.wiwiss.fu-berlin.de/bizer/silk/">Silk website</a>.<br>
</p>
<h4>Data Output</h4>
<p>Two output formats are currently supported by LDIF.</p>
<h5>N-Quads Writer</h5>
<p>The N-Quads writer dumps the final output of the integration
workflow into a single N-Quads file. This file contains the translated
versions of all graphs from the input graph set as well as the content
of the provenance graph and sameAs-links.
<br>
Currently, the provenance information is just copied to the final
output. In future releases, we will use the provenance information for
data quality assessment and data fusion (see
<a href="#nextSteps">Next Steps</a>).
</p>
<h5>N-Triples Writer</h5>
<p>The N-Triples writer dumps the final output of the integration
workflow into a single N-Triples file. Since there exists no connection
to the provenance data anymore after outputting it as N-Triple, the
provenance data is discarded instead of being output.<br>
</p>
<h4>Runtime Environments </h4>

<p>The Runtime Environment for the integration component manages the data
flow between the various stages/modules and the caching of the intermediate
results.
 </p>
<p> In order to parallelize the data processing, the data is
partitioned into entities prior to supplying it to a transformation
module. An entity represents a Web resource together with all data that
is required by a transformation module to process this resource.
Entities consist of one or more graph paths and include a graph
URI for each node. Each transformation module specifies which paths
should be included into the entities it processes. Splitting the work into fine-granular entities, allows LDIF to parallelize
the work.
</p>

<p>LDIF provides three implementations of the Runtime Environment:  1. the
in-memory version, 2. the RDF store version and 3. the Hadoop version.
Depending of the size of your data set and the available computing
resources, you can choose the runtime environment that best fits your use
case.
</p>

<h5>Single machine / In-memory</h5>
<p>  The in-memory implementation keeps
all intermediate results in
memory.
    It is fast but its scalability is limited by the amount of
available memory. For instance, integrating 25 million triples required 5 GB
memory within one of our <a href="benchmark.html">experiments</a>. Parallelization is achieved by
distributing the work (entities) to multiple threads.

</p>

<h5>Single machine / RDF Store</h5>

<p>
This implementation of the runtime environment uses an  <a href="http://openjena.org/TDB/">Jena TDB RDF store</a> to
store intermediate results. The communication between the RDF store and the
runtime environment is realized in the form of SPARQL queries. This runtime
environment allows you to process data sets that don't fit into memory
anymore. The downside is that the RDF Store implementation is slower as the
In-memory implementation.
</p>
<h5>Cluster / Hadoop</h5>
<p>
This implementation of the runtime environment allows you to parallelize
the work onto multiple machines using Hadoop.
Each phase in the integration flow has been ported to be executable on a Hadoop cluster.
Some initial performance figures comparing the run times of the in-memory, quad store and Hadoop version against different data set sizes are provided in the <a href="http://www.assembla.com/spaces/ldif/wiki/Benchmark">Benchmark Wiki</a>.
</p>


<h3 id="nextSteps">Next steps for LDIF</h3>
<p>Over the next months, we plan to extend LDIF along the
following lines:<br>
</p>
<ol>
  <li>Add a <strong>Data Quality Evaluation and Data Fusion Module</strong>
which allows Web data to be filtered according to different data
quality assessment policies and provides for fusing Web data according
to different conflict resolution methods.</li>
  <li><strong>Flexible integration workflow</strong>. Currently the
integration flow is static and can only be influenced by predefined
configuration parameters. We plan to make the workflow and its
configuration more flexible in order to make it easier to include
additional modules that cover other data integration aspects.<br>
  </li>
</ol>
<h2 id="configuration">3. Configuration
Options</h2>
<p>This section describes how LDIF configuration files look like and
which parameters you can modify to change the runtime behavior of LDIF.</p>
<h3 id="scheduler">Schedule Job Configuration</h3>
<p>A Schedule Job updates the representation of external sources in the
local cache and it is configured with an XML document, whose structure
is described by this <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/ldif-core/src/main/resources/xsd/SchedulerConfig.xsd">XML
Schema</a>.
The scheduler configuration is the top configuration file that
references all the other configuration files like the for the import
jobs for accessing remote sources and for the integration job.<br>
</p>
<p>A typical configuration document looks like this:</p>
<pre>&lt;integrationJob xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
             xmlns="http://www4.wiwiss.fu-berlin.de/ldif/"&gt;
    &lt;properties&gt;test.properties&lt;/properties&gt;
    &lt;sources&gt;
        &lt;source&gt;dumps&lt;/source&gt;
    &lt;/sources&gt;
    &lt;linkSpecifications&gt;linkSpecs&lt;/linkSpecifications&gt;
    &lt;mappings&gt;mappings&lt;/mappings&gt;
    &lt;outputs&gt;
        &lt;output&gt;
            &lt;file&gt;
                &lt;path&gt;output.nq&lt;/path&gt;
                &lt;format&gt;nquads&lt;/format&gt;
            &lt;/file&gt;
            &lt;phase&gt;complete&lt;/phase&gt;
        &lt;/output&gt;
    &lt;/outputs&gt;
    &lt;runSchedule&gt;daily&lt;/runSchedule&gt;
&lt;/integrationJob&gt;<br></pre>
<p>It has the following elements:</p>
<ul>
    <li><i>properties</i> - the path to a Java properties file for
        configuration parameters, <a href="#configurationproperties">see below</a>
        for more details; </li>
    <li><i>sources</i> - each <i>source</i> specifies a path (to a file or a directory) in the local or distributed file system,
        all files must be in <a href="http://sw.deri.org/2008/07/n-quads/">N-Quads</a> format and may
        be compressed (.gz, .zip or .bz2);<br>
    </li>
    <li><i>linkSpecifications</i> - a directory containing the <a href="http://www.assembla.com/wiki/show/silk/Link_Specification_Language">Silk
        link specifications</a>;</li>
    <li><i>mappings</i> - a directory containing the <a href="http://www4.wiwiss.fu-berlin.de/bizer/r2r/spec/index.html#mappings">R2R
        mappings</a>;</li>
    <li><i>outputs</i> - each <i>output</i> specifies a destination where data are written to, both file and <a href="http://www.assembla.com/wiki/show/ldif/QuadStore_Compatibility">SPARQL/Update</a> outputs are supported;</li>
    <li><i>runSchedule</i> - how often the integration is expected to be
        run. Valid values are: <span style="font-family: monospace;">onStartup</span>,<span style="font-family: monospace;"> always</span>,<span style="font-family: monospace;"> hourly</span>,<span style="font-family: monospace;"> daily</span>,<span style="font-family: monospace;"> weekly</span>,<span style="font-family: monospace;"> monthly</span>,<span style="font-family: monospace;"> yearly </span>and <span style="font-family: monospace;">never</span>. <span class="Apple-style-span" style="border-collapse: separate; color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; font-size: medium;"><span class="Apple-style-span" style="border-collapse: collapse; font-family: Arial,Helvetica,'Liberation Sans',FreeSans,sans-serif; font-size: 12px; line-height: 18px; text-align: left;"></span></span></li>
</ul>
<p>Both relative and absolute paths are supported.</p>
<h4 id="configprops">Configuration Properties</h4>
<p>In the Schedule Job configuration file you can specify a (Java)
properties file to further tweak certain parameters concerning the
workflow. Here is a list with all properties that can be set at the
moment and the possible values for each property:</p>
<ul>
  <li>
    <p><i>provenanceGraphURI</i> <br>
Specify the graph
where the provenance information is stored. Default graph name: <span style="font-family: monospace;">http://www4.wiwiss.fu-berlin.de/ldif/provenance</span></p>
    <pre>provenanceGraphURI = http://www4.wiwiss.fu-berlin.de/ldif/provenance</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i id="onetimeexec">oneTimeExecution</i> <br>
If <span style="font-family: monospace;">true</span> the scheduler
executes all the Jobs at most once. Import Jobs are evaluated first and
then (as all of these have finished) the integration job starts.
Default: <span style="font-family: monospace;">false</span></p>
    <pre>oneTimeExecution = true | false</pre>
  </li>
</ul>
<h3><a name="integrationjob"></a>Integration Job Configuration<br>
</h3>
<p>An Integration Job is configured with an XML document, whose
structure is described by this <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/ldif-core/src/main/resources/xsd/IntegrationJob.xsd">XML
Schema</a>.
<br>
The current structure is very simple because the integration flow
is static at the moment - something that will change in future
releases. The config file specifies amongst other things how often the
whole integration workflow should be executed. It should be noted that
when an integration job starts, it only works on fully imported data.
Data of import jobs that did not finish before the integration starts
is ignored - the only exception is if the <a href="#onetimexec"><span style="font-family: monospace;">oneTimeExecution</span></a>
configuration property is set to true; then the integration waits for
all import jobs to finish.<br>
</p>
<p>A typical configuration document looks like this:</p>
<pre>&lt;integrationJob xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"<br>            xmlns="http://www4.wiwiss.fu-berlin.de/ldif/"&gt;<br>    &lt;properties&gt;test.properties&lt;/properties&gt;<br>    &lt;sources&gt;sources&lt;/sources&gt;<br>    &lt;linkSpecifications&gt;linkSpecs&lt;/linkSpecifications&gt;<br>    &lt;mappings&gt;mappings&lt;/mappings&gt;<br>    &lt;output&gt;output.nq&lt;/output&gt;<br>    &lt;runSchedule&gt;daily&lt;/runSchedule&gt;<br>&lt;/integrationJob&gt;<br></pre>
<p>It has the following elements:</p>
<ul>
  <li><i>properties</i> - the path to a Java properties file for
configuration parameters, <a href="#configurationproperties">see below</a>
for more details; </li>
  <li><i>sources</i> - a directory containing the source data sets,
these files in this directory must be in <a href="http://sw.deri.org/2008/07/n-quads/">N-Quads</a> format and may
be compressed (.gz, .zip or .bz2); For the Hadoop version this value
represents a path in the distributed file system (or on the local file
system if run in standalone mode). Else than that the Hadoop version of
the integration job configuration does not differ.<br>
  </li>
  <li><i>linkSpecifications</i> - a directory containing the <a href="http://www.assembla.com/wiki/show/silk/Link_Specification_Language">Silk
link specifications</a>;</li>
  <li><i>mappings</i> - a directory containing the <a href="http://www4.wiwiss.fu-berlin.de/bizer/r2r/spec/index.html#mappings">R2R
mappings</a>;</li>
  <li><i>output</i> - the name of the file to which the output should
be written;</li>
  <li><i>runSchedule</i> - how often the integration is expected to be
run. Valid values are: <span style="font-family: monospace;">onStartup</span>,<span style="font-family: monospace;"> always</span>,<span style="font-family: monospace;"> hourly</span>,<span style="font-family: monospace;"> daily</span>,<span style="font-family: monospace;"> weekly</span>,<span style="font-family: monospace;"> monthly</span>,<span style="font-family: monospace;"> yearly </span>and <span style="font-family: monospace;">never</span>. <span class="Apple-style-span" style="border-collapse: separate; color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; font-size: medium;"><span class="Apple-style-span" style="border-collapse: collapse; font-family: Arial,Helvetica,'Liberation Sans',FreeSans,sans-serif; font-size: 12px; line-height: 18px; text-align: left;"></span></span></li>
</ul>
<p> Both relative and absolute paths are supported.
In this case there is a root directory with the config file and the
test.properties file in it.
Furthermore the following directories would be nested in the root
directory: linkSpecs, sources and mappings.
Data sets have to be in a local directory.</p>
<h4><a name="configurationproperties"></a>Configuration Properties for
the Integration Job<br>
</h4>
<p>In the Integration Job configuration file you can specify a (Java)
properties file to further tweak certain parameters concerning the
integration workflow. Here is a list with all properties that can be
set at the moment and the possible values for each property:</p>
<ul>
  <li>
    <p><i>output</i><br>
Specify if all input quads from the
input should be included in the output file or only the quads that were
mapped/translated by LDIF. Default: <span style="font-family: monospace;">mapped-only</span></p>
    <pre>output = all | mapped-only</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>rewriteURIs</i><br>
Specify if URI aliases in the input data should be rewritten to a
single target URI in the output data. Default: <span style="font-family: monospace;">true</span></p>
    <pre>rewriteURIs = true | false</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>provenanceGraphURI</i> <br>
Specify the graph
containing the provenance information. Quads from
this
graph are only written to the final output data set and not processed
any further in the integration workflow. Default graph name: <span style="font-family: monospace;">http://www4.wiwiss.fu-berlin.de/ldif/provenance</span></p>
    <pre>provenanceGraphURI = http://www4.wiwiss.fu-berlin.de/ldif/provenance</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>validateSources</i><br>
Source data sets, R2R mappings and Silk link specifications are all
validated before starting with the actual integration. Since the syntax
validation of the sources (N-Triples / N-Quads files) takes some time
(about 15s/GB), if you already know that they are correct, it is
possible to disable this step by setting the property to false.
Default: <span style="font-family: monospace;">true</span></p>
    <pre>validateSources = true | false</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>discardFaultyQuads</i><br>
If LDIF finds a (syntax) error -
like spaces in URIs - in the source data, it does not progress with the
integration to give you the opportunity to fix these errors first.
However, sometimes you just don't care that some quads are faulty and
want them to be ignored instead, so that the overall integration can
still proceed. Set this property to <span style="font-family: monospace;">true</span> in order to ignore syntax
errors in the source data sets. Default: <span style="font-family: monospace;">false</span></p>
    <pre>discardFaultyQuads = false | true</pre>
  </li>
  <li>
    <p><i>useExternalSameAsLinks</i><br>
Besides discovering
equal entities in the identity resolution phase, LDIF also offers the
opportunity to input these relationships in form of owl:sameAs links.
The NT/N-Quads file with these sameAs-links has to be placed in the
source directory with the other data sets. If you don’t want to use
sameAs-links from the input data, set this property to false. Default: <span style="font-family: monospace;">true</span></p>
    <pre>useExternalSameAsLinks = true | false</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>outputFormat</i><br>
Although the default output format is N-Quads, LDIF also offers a
triple output as N-Triple. Default: <span style="font-family: monospace;">nq</span></p>
    <pre>outputFormat = nq | nt</pre>
  </li>
</ul>
<ul>
  <li><span style="font-style: italic;">entityBuilderType</span><br>
Specify the type of the entity builder component used for the local
execution profile of LDIF. This choice heavily influences the
performance and memory foot print. For large data sets and/or low
memory machines it is a good idea to set this to <span style="font-family: monospace;">quad-store</span> because the
in-memory version of LDIF is very memory intensive. Default: <span style="font-family: monospace;">in-memory</span>
    <pre>entityBuilderType = in-memory | quad-store</pre>
  </li>
  <li><i>quadStoreType</i><br>
Specify the concrete store that should be used as backend for the quad
store version, see configuration property <span style="font-style: italic;">entityBuilderType</span>. Right now there
is only one store, Jena TDB, that is supported by LDIF, so this
property doesn't need to be set explicitly. Default: <span style="font-family: monospace;">tdb</span>
    <pre>quadStoreType = tdb</pre>
  </li>
  <li><i>databaseLocation</i><br>
This property allows to set the location of the data base on the local
file system. This value is used by the quad store system to configure
its database location. Default: The temporary directory of the
operating system<span style="font-family: monospace;"></span>
    <pre>databaseLocation = Path-To-Database-Dir<br></pre>
  </li>
  <li>
    <p><i>uriMinting</i><br>
Specify if output resources should be given an URI within the target
namespace. URI minting. Default: <span style="font-family: monospace;">false</span></p>
    <pre>uriMinting = true | false</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>uriMintNamespace</i><br>
Specify the namespace into which the URIs of all output resources are
translated, if URI minting is enabled. Default: <span style="font-family: monospace;">http://www4.wiwiss.fu-berlin.de/ldif/resource/</span></p>
    <pre>uriMintNamespace = http://www4.wiwiss.fu-berlin.de/ldif/resource/</pre>
  </li>
</ul>
<ul>
  <li>
    <p><i>uriMintLabelPredicate</i><br>
The value of this property is a
space separated list of property URIs, which will be used to expand the
name space URI specified with <i>uriMintNamespace.</i> For each entity
one value of the specified URIs is used to act as the local part of the
minted URI. If there are many values to pick from, the max value
(lexicographic order) is taken. If no value could be found for any of
the properties, the URI of the entity is not minted. Note that there is
no way to prevent name clashes at the moment. </p>
    <pre>uriMintLabelPredicate = http://www.w3.org/2000/01/rdf-schema#label http://www4.wiwiss.fu-berlin.de/ldif/property-example/id</pre>
  </li>
</ul>
    <ul>
      <li>
        <p><i>uriMintLanguageRestriction</i><br>If set this parameter restricts the values that are considered for URI minting to specific language literals/tags. The value of this parameter is a whitespace separated list of language tags. Default: not set <b></b></p>
        <pre>uriMintLanguageRestriction = en fr es</pre>
      </li>
    </ul>

<h3><a name="importjob"></a>Import Job Configuration<br>
</h3>
<p>An Import Job is configured with an XML document, whose structure is
described by this <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/ldif-core/src/main/resources/xsd/ImportJob.xsd">XML
Schema</a>.<br>
</p>
<p>It has the following elements:</p>
<ul>
  <li><i>internalId</i> - A unique ID, which will be used internally to
track the import job and its files like data and provenance;<br>
  </li>
  <li><i>dataSource </i>- A reference to a <a href="#datasource">data
source</a> to state from which source this job imports data;<br>
  </li>
  <li><span style="font-style: italic;">one kind of importJob</span> -
There has to be exactly one import job element, which can be either <span style="font-family: monospace;">quadImportJob</span>, <span style="font-family: monospace;">tripleImportJob</span>, <span style="font-family: monospace;">crawlImportJob</span> or <span style="font-family: monospace;">sparqlImportJob</span>;</li>
  <li><i>refreshSchedule</i> - how often the integration is expected to
be run. Valid values are: <span style="font-family: monospace;">onStartup</span>,<span style="font-family: monospace;"> always</span>,<span style="font-family: monospace;"> hourly</span>,<span style="font-family: monospace;"> daily</span>,<span style="font-family: monospace;"> weekly</span>,<span style="font-family: monospace;"> monthly</span>,<span style="font-family: monospace;"> yearly </span>and <span style="font-family: monospace;">never</span>.</li>
</ul>
<p>LDIF supports four different mechanisms to import external data: </p>
<ul>
  <li><i>Quad Import Job</i> – import N-Quad dumps</li>
  <li><i>Triple Import Job</i> – import RDF/N-Triple dumps</li>
  <li><i>Crawl Import Job</i> – import by dereferencing URIs as RDF
data, using the LDSpider Web Crawling Framework</li>
  <li><i>SPARQL Import Job</i> – import by querying a SPARQL endpoint</li>
</ul>
<h4>Quad Import</h4>
<p>A typical config file for a Quad Import Job looks like this: </p>
<pre>&lt;importJob xmlns="http://www4.wiwiss.fu-berlin.de/bizer/ldif"&gt;<br>    &lt;internalId&gt;dBpedia.0&lt;/internalId&gt;<br>    &lt;dataSource&gt;dBpedia&lt;/dataSource&gt;<br>    &lt;refreshSchedule&gt;daily&lt;/refreshSchedule&gt;<br>    <span style="font-weight: bold;">&lt;quadImportJob&gt;</span><br>      &lt;dumpLocation&gt;http://dbpedia.org/dump.nq&lt;/dumpLocation&gt;<br>    <span style="font-weight: bold;">&lt;/quadImportJob&gt;</span><br>&lt;/importJob&gt;<br></pre>
<h4>Triple Import<br>
</h4>
<p>In a triple import you use the <span style="font-family: monospace;">tripleImportJob</span>
element instead of the <span style="font-family: monospace;">quadImportJob</span>
element: </p>
<pre>&lt;importJob xmlns="http://www4.wiwiss.fu-berlin.de/bizer/ldif"&gt;<br>    &lt;internalId&gt;dBpedia.0&lt;/internalId&gt;<br>    &lt;dataSource&gt;dBpedia&lt;/dataSource&gt;<br>    &lt;refreshSchedule&gt;daily&lt;/refreshSchedule&gt;<br>    <span style="font-weight: bold;">&lt;tripleImportJob&gt;</span><br>      &lt;dumpLocation&gt;http://dbpedia.org/dump.nt&lt;/dumpLocation&gt;<br>    <span style="font-weight: bold;">&lt;/tripleImportJob&gt;</span><br>&lt;/importJob&gt;</pre>
<h4>SPARQL Import<br>
</h4>
<p>In a SPARQL import job the <span style="font-family: monospace;">sparqlImportJob
</span>element
specifies the endpoint that will be queried for data and a restriction
pattern - note that angle brackets of URIs have to be escaped using <span style="font-family: monospace;">&amp;lt;</span> and <span style="font-family: monospace;">&amp;gt;</span>. This restriction
pattern is joined with the pattern <span style="font-family: monospace;">?s ?p ?o</span>,
which is also the only pattern in the Construct part of the generated
SPARQL Construct query. This means that all the triples of
the entities matching the restriction in the <span style="font-family: monospace;">pattern</span> element are collected.
It is also possible to specify a graph with the <span style="font-family: monospace;">graphName</span> element and to
restrict the number of imported triples with the <span style="font-family: monospace;">tripleLimit</span> element. All but
the <span style="font-family: monospace;">endpointLocation</span> is
optional.<span class="Apple-style-span" style="border-collapse: separate; color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; font-size: medium;"><span class="Apple-style-span" style="border-collapse: collapse; font-family: Arial,Helvetica,'Liberation Sans',FreeSans,sans-serif; font-size: 12px; line-height: 18px; text-align: left;"></span></span>
</p>
<pre>&lt;importJob xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"<br>            xmlns="http://www4.wiwiss.fu-berlin.de/ldif/"&gt;<br>    &lt;internalId&gt;musicbrainz.3&lt;/internalId&gt;<br>    &lt;dataSource&gt;MusicBrainz_Talis&lt;/dataSource&gt;<br>    &lt;refreshSchedule&gt;monthly&lt;/refreshSchedule&gt;<br>    <span style="font-weight: bold;">&lt;sparqlImportJob&gt;</span><br>        &lt;endpointLocation&gt;http://api.talis.com/stores/musicbrainz/services/sparql&lt;/endpointLocation&gt;<br>        &lt;tripleLimit&gt;100000&lt;/tripleLimit&gt;<br>        &lt;sparqlPatterns&gt;<br>            &lt;pattern&gt;?s a &amp;lt;http://purl.org/ontology/mo/MusicArtist&amp;gt;&lt;/pattern&gt;<br>        &lt;/sparqlPatterns&gt;<br>    <span style="font-weight: bold;">&lt;/sparqlImportJob&gt;</span><br>&lt;/importJob&gt;<br></pre>
<h4>Crawler Import<br>
</h4>
<p>A crawl import job is configured by specifying one or more seed URIs
as starting points of the crawl, predicates that the crawler should
follow to discover new resources and optionally the maximum number of
levels to crawl, meaning the maximum distance to one of the seed URIs.
Also optionally the maximum number of resources to crawl can be
specified. Of each crawled resource all received triples are stored.<br>
</p>
<pre>&lt;importJob xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"<br>            xmlns="http://www4.wiwiss.fu-berlin.de/ldif/"&gt;<br>    &lt;internalId&gt;freebase.0&lt;/internalId&gt;<br>    &lt;dataSource&gt;Freebase&lt;/dataSource&gt;<br>    &lt;refreshSchedule&gt;onStartup&lt;/refreshSchedule&gt;<br>    <span style="font-weight: bold;">&lt;crawlImportJob&gt;</span><br>        &lt;seedURIs&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/en.dance-pop&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/en.radiohead&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/en.art_rock&lt;/uri&gt;<br>        &lt;/seedURIs&gt;<br>        &lt;predicatesToFollow&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.artist.genre&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.genre.albums&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.genre.artists&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.album.genre&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.album.artist&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.artist.album&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/influence.influence_node.influenced_by&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.artist.label&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.record_label.artist&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.producer.releases_produced&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.release.producers&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.release.album&lt;/uri&gt;<br>            &lt;uri&gt;http://rdf.freebase.com/ns/music.producer.releases_produced&lt;/uri&gt;<br>        &lt;/predicatesToFollow&gt;<br>        &lt;levels&gt;5&lt;/levels&gt;<br>        &lt;resourceLimit&gt;50000&lt;/resourceLimit&gt;<br>    <span style="font-weight: bold;">&lt;/crawlImportJob&gt;</span><br>&lt;/importJob&gt;</pre>
<br>
<h4 id="provenance">Provenance Metadata</h4>
<p>The result of each import contains provenance metadata, whose
structure is described by this <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/ldif-core/src/main/resources/owl/provenance.owl">ontology</a>.
<br>
For each imported graph, provenance information will contain:
</p>
<ul>
  <li>import date and time,</li>
  <li>chosen import type,</li>
  <li>original location (only for Quad and Triple Import Jobs).</li>
</ul>
<p>A typical provenance graph for a Crawl Import Job looks like this:</p>
<img src="img/Freebase-Provenance.png" alt="Provenance graph">
<p>A typical provenance graph for a Quad Import Job looks like this:</p>
<pre>&lt;http://dbpedia.org/graphA&gt; &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#type&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/ImportedGraph&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>&lt;http://dbpedia.org/graphA&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/hasImportJob&gt; _:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>&lt;http://dbpedia.org/graphB&gt; &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#type&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/ImportedGraph&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>&lt;http://dbpedia.org/graphB&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/hasImportJob&gt; _:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>_:dbpedia0 &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#type&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/ImportJob&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>_:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/importId&gt; "dBpedia.0" &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>_:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/lastUpdate&gt; "2011-09-21T19:01:00-05:00"^^&lt;http://www.w3.org/2001/XMLSchema#dateTime&gt; &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>_:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/hasDatasource&gt; "dBpedia" &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>_:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/hasImportType&gt; "quad" &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br>_:dbpedia0 &lt;http://www4.wiwiss.fu-berlin.de/ldif/hasOriginalLocation&gt; "http://mes.smw-lde-eu.s3.amazonaws.com/dBpedia_dump.nt.bz2" &lt;http://www4.wiwiss.fu-berlin.de/ldif/provenance&gt; .<br></pre>
<h3 id="datasource">Data Source Configuration</h3>
<p>A Data Source is configured with an XML document, whose structure is
described by this <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/ldif-core/src/main/resources/xsd/DataSource.xsd">XML
Schema</a>. It contains human readable information about a data source.
The <span style="font-family: monospace;">label</span> element should
be a unique string in each integration use case, because it will be
referenced by the <a href="#importjob">import jobs</a>.<br>
</p>
<pre>&lt;dataSource&gt;<br>    &lt;label&gt;DBpedia&lt;/label&gt;<br>    &lt;description&gt;DBpedia ist an RDF version of Wikipedia&lt;/description&gt;<br>   &lt;homepage&gt;http://dbpedia.org&lt;/homepage&gt;<br>&lt;/dataSource&gt;<br></pre>
<h2 id="quickstart">4. Quick start</h2>

<p>This section explains you how to run the different versions of LDIF.</p>

<h3 id="inmemoryquickstart">Single machine / In-memory</h3>
<p>To see LDIF in action, please follow these steps:</p>
<ul>
  <li><a href="http://www4.wiwiss.fu-berlin.de/bizer/ldif/releases/ldif-0.4.zip">download</a>
the latest release</li>
  <li>unpack the archive and change into the extracted directory <tt>ldif-0.4</tt></li>
  <li>run LDIF on the <a href="#example1">Music example</a></li>
  <ul>
    <li>under Linux / Mac OS type:</li>
    <pre>bin/ldif examples/music/light/schedulerConfig.xml</pre>
    <li>under Windows type:</li>
    <pre>bin\ldif.bat examples\music\light\schedulerConfig.xml</pre>
  </ul>
</ul>
<p>The example will run in about 3 minutes. Integration results will be
written into <tt>integrated_music_light.nq</tt> in the working
directory, containing both integrated data and <a href="#provenance">provenance metadata</a>. <br>
Learn more about LDIF configuration by looking at the <a href="#scheduler">Schedule Job Configuration</a> (<tt>examples/music/light/schedulerConfig.xml</tt>)
and the <a href="#integrationjob">Integration Job
Configuration</a> (<tt>examples/music/light/integrationJob.xml</tt>) </p>

<h3 id="rdfstorequickstart">Single machine / RDF Store<br>
</h3>
<p>To see LDIF running with a quad store (TDB) as backend, please follow these steps:</p>

<ul>
<li><a href="http://www4.wiwiss.fu-berlin.de/bizer/ldif/releases/ldif-0.4.zip">download</a>
the latest release</li><li>unpack the archive and change into the extracted directory <tt>ldif-0.4</tt></li><li>run LDIF on the <a href="#example1">Music example</a></li><ul><li>under Linux / Mac OS type:</li><pre>bin/ldif examples/music/light/schedulerConfigTDB.xml</pre>
    </li>  <li>Windows: This should work under Windows with Cygwin, but has not been tested, yet. (TDB relies on the <a href="http://manpages.ubuntu.com/manpages/hardy/en/man1/sort.1.html">sort</a> program for bulk loading)<br>
</li></ul>
</ul>

The configuration properties that need to be used are <code>quadStoreType</code> and <code>databaseLocation</code> (see the <a href="#configurationproperties">Configuration section</a> from more details).

<p>The example will run in about 3 minutes. Integration results will be
written into <tt>integrated_music_light.nq</tt> in the working
directory, containing both integrated data and <a href="#provenance">provenance metadata</a>. <br>
Learn more about LDIF configuration by looking at the <a href="#scheduler">Schedule Job Configuration</a> (<tt>examples/music/light/schedulerConfig.xml</tt>)
and the <a href="#integrationjob">Integration Job
Configuration</a> (<tt>examples/music/light/integrationJob.xml</tt>) </p>


<h3 id="hadoopquickstart">Cluster / Hadoop</h3>
<p>To see LDIF running on a Hadoop cluster, please follow these steps:</p>
<ul>
  <li>set up and configure a Hadoop (0.20.2) <a href="http://hadoop.apache.org/common/docs/current/cluster_setup.html">cluster</a> </li>
   <li>ssh to a cluster node</li>
  <ul><li><a href="http://www4.wiwiss.fu-berlin.de/bizer/ldif/releases/ldif-hadoop-0.4.zip">download</a>
the latest LDIF release</li>
  <li>unpack the archive and change into the extracted directory <tt>ldif-hadoop-0.4</tt></li>
  <li>run LDIF on the <a href="#example1">Music example</a></li>
    <pre>hadoop jar lib/ldif-hadoop-0.4.jar scheduler examples/music/light/schedulerConfig.xml</pre>
  </ul>
</ul>

<p>This will import the data sets as defined by the LDIF import jobs and copies them afterwards to the Hadoop file system. Integration results will be written into the <tt>/user/hduser/integrated_music_light.nq</tt> directory in the Hadoop distributed file system (HDFS).</li> You can check the content of this directory using the following command: <tt>hadoop dfs -ls /user/hduser/integrated_music_light.nq</tt></p>

<p>Please note that most of the run time for this small use case is dominated by the Hadoop overhead.</p>

<p>Learn more about Hadoop configuration by looking at our <a href="http://www.assembla.com/spaces/ldif/wiki/Benchmark">Benchmark</a> and <a href="http://www.assembla.com/spaces/ldif/wiki/Hadoop_troubleshooting">Troubleshooting</a> wiki pages.</p>

<p>In order to have a cleaner console output, consider replacing the Hadoop default logging configuration (<tt>[HADOOP-HOME]/conf/log4j.properties</tt>) with our customized <a href ="http://www.assembla.com/code/ldif/git/nodes/ldif/resources/hadoop_log4j.properties">log4j.properties</a> file.</p>

<p>Here is a list of Hadoop configuration parameters that can be useful to tune when running LDIF with big datasets:</p>

<table>
    <tbody>
    <tr>
        <th> Parameter</th>
        <th> Description</th>
        <th> Recommended value</th>
    </tr>
    <tr class="odd">
        <td>mapred.job.reuse.jvm.num.tasks</td>
        <td>Reuse of a JVM across multiple tasks of the same job</td>
        <td>-1</td>
    </tr>

    <tr class="even">
        <td>mapred.min.split.size</td>
        <td>The minimum size chunk that map input should be split into</td>
        <td>268435456</td>
    </tr>


    <tr class="odd">
        <td>mapred.map.child.java.opts</td>
        <td>Specify the heap-size for the child jvms</td>
        <td>-Xmx1G</td>
    </tr>

     <tr class="even">
        <td>mapred.output.compress</td>
        <td>Enable output compression</td>
        <td>true</td>
    </tr>
        <tr class="odd">
        <td>mapred.output.compression.type</td>
        <td>How the compression is applied</td>
        <td>BLOCK</td>
    </tr>

        <tr class="even">
        <td>mapred.output.compression.code</td>
        <td>The compression codec class that is used for compression/decompression</td>
        <td>org.apache.hadoop.io.compress.GzipCodec</td>
    </tr>

    </tbody>
</table>

<h2 id="examples">5. Examples</h2>
<br>
This section presents two LDIF usage examples.<br>
<ol>
  <li>The <a href="#example1">Music example</a> shows how different
music-related data
sources are accessed using the LDIF Web data access components and
integrated afterwards using the LDIF data translation and identity
resolution modules.</li>
  <li>The <a href="#example2">Life Science example</a> shows how LDIF
is used to integrate several local RDF dumps of life science data sets.<br>
  </li>
</ol>
<h3 id="example1">5.1 Using LDIF to integrate Data from the Music Domain</h3>
<p>This example shows how LDIF is applied to integrate data describing
musical artists, music albums, labels and genres from the following
remote sources:</p>
<ul>
  <li><a href="http://dbpedia.org/">DBpedia</a></li>
  <li><a href="http://rdf.freebase.com/">Freebase</a></li>
  <li><a href="http://musicbrainz.dataincubator.org/">MusicBrainz</a>
(at Talis)</li>
  <li><a href="http://www.bbc.co.uk/music/artist/">BBC Music</a></li>
</ul>
<h4>Configurations</h4>
<p>Each source is accessed via the appropriate access module. The
DBpedia data set is downloaded, Freebase is crawled because of lack of
other
access possibilities, MusicBrainz and BBC Music are both accessed via
SPARQL because no download of the data set is available and crawling is
in general inferior, because you might not gather all the instances you
are interested in.</p>
The following import job configuration files are used for the different
sources:<br>
<ul>
  <li>DBpedia <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/DBpediaDumpImport.xml">Dump-Properties</a>,
    <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/DBpediaDumpImport_Types.xml">Dump-Types</a>
  </li>
  <li>Freebase <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/FreebaseCrawlImport.xml">Crawl</a>
  </li>
  <li>MusicBrainz <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/MusicBrainzSPARQLImport_MusicArtist.xml">Sparql-MusicArtist</a>,
    <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/MusicBrainzSPARQLImport_Label.xml">Sparql-Label</a>,
    <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/MusicBrainzSPARQLImport_Record.xml">Sparql-Record</a>
  </li>
  <li>BBC Music <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/BBCSPARQLImportMusicArtist.xml">Sparql-MusicArtist</a>
, <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/BBCSPARQLImportRecord.xml">Sparql-Record</a>,
    <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/BBCSPARQLImportBirth.xml">Sparql-Birth</a>,
    <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/ImportJobs/BBCSPARQLImportDeath.xml">Sparql-Death</a>
  </li>
</ul>
<p>The following mapping file provides for translating the source data
sets into our target vocabulary:</p>
<ul>
  <li>R2R mapping file: <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/mappings/mappings.ttl">mappings.ttl</a></li>
</ul>
<p>The target vocabulary is a mix of existing ontologies like FOAF,
Music
Ontology, Dublin Core, DBpedia etc. </p>
<p>The following Silk identity resolution heuristics are used to find
music artists, labels and albums that are described in multiple data
sets:</p>
<ul>
  <li>Silk link specification: <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/music/full/linkspecs/musicLinkSpec.xml">musicLinkSpec.xml</a>
  </li>
</ul>
<p> Music artist and record instances are integrated from all the
sources. <br>
Labels and genres are integrated only from fewer sources since not all
of them provide this information.
For example MusicBrainz does <a href="http://musicbrainz.org/doc/General_FAQ#Why_does_MusicBrainz_not_support_genre_information.3F">not
support</a> genre information.</p>
<h4>Execution instructions</h4>
<p>In order to run the example, please download LDIF and run the
following commands:</p>
<ul>
  <li>change into the LDIF root directory;</li>
  <li>under Linux / Mac OS type:</li>
  <pre>bin/ldif examples/music/full/schedulerConfig.xml</pre>
  <li>under Windows type:</li>
  <pre>bin\ldif.bat examples\music\full\schedulerConfig.xml</pre>
</ul>
<p>Please note that the execution of the import jobs can take about
3 hours, mainly due to crawling, which is relatively slow compared
to other access methods.</p>
<p> It is also available a <i>light</i> version of the use case, which
runs in less than 5 minutes:</p>
<ul>
  <li>change into the LDIF root directory;</li>
  <li>under Linux / Mac OS type:</li>
  <pre>bin/ldif examples/music/light/schedulerConfig.xml</pre>
  <li>under Windows type:</li>
  <pre>bin\ldif.bat examples\music\light\schedulerConfig.xml</pre>
</ul>
<h4>Output</h4>
<p>
The following graph shows a portion of the LDIF output describing Bob
Marley:
</p>
<img src="img/Bob-Marley-graphs.png" alt="LDIF output for music use case">
<h3 id="example2">5.2 Using LDIF to integrate Life Science Data</h3>
<p>This example shows how LDIF is applied to integrate data originating
from five Life Science sources. </p>
<p>The example is taken from a joint project with <a href="http://www.vulcan.com/TemplateHome.aspx?contentId=1">Vulcan Inc</a>.
and <a href="http://www.ontoprise.de/">ontoprise GmbH</a> about
extending <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BeckerBizerErdmannGreaves-SMW-LDE-Poster-ISWC2010.pdf">Semantic
Media Wiki+ with a Linked Data Integration Framework</a>. <br>
<br>
In this example, the following data sources are translated into a
common <a href="resources/Wiki.owl">Wiki ontology</a>:</p>
<ul>
  <li><a href="http://mouse.brain-map.org/">Allen Mouse Brain Atlas</a>
is a growing collection of online public resources integrating
extensive gene expression and neuroanatomical data. </li>
  <li><a href="http://www.genome.jp/kegg/genes.html">KEGG GENES</a>, a
collection of gene catalogs for all complete genomes generated from
publicly available resources, mostly NCBI RefSeq</li>
  <li><a href="http://www.genome.jp/kegg/pathway.html">KEGG Pathway</a>,
a collection of pathway maps representing knowledge on the molecular
interaction and reaction networks</li>
  <li><a href="http://pharmgkb.org/">PharmGKB</a>, which provides data
on gene information, disease and drug pathways, and SNP variants</li>
  <li><a href="http://www.uniprot.org/">Uniprot</a>, which provides
information on protein sequence and function </li>
</ul>
<h4>Configurations</h4>
<p>A subset of these datasets can be found in the sub-directory <span style="font-family: monospace;">examples/life-science/sources</span>
of the LDIF release.<br>
</p>
<p>The following mapping file provides for translating the vocabularies
used by the source data sets into the Wiki ontology. </p>
<ul>
  <li>R2R mapping file: <a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/life-science/mappings/ALL-to-Wiki.r2r.ttl">ALL-toWiki.r2r.ttl</a>
    <span style="text-decoration: underline;"></span></li>
</ul>
<p>The following Silk identity resolution heuristics are used to find
genes and other expressions that are described in multiple data sets.</p>
<ul>
  <li><a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/life-science/linkSpecs/genes.xml">genes.xml</a>,</li>
  <li><a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/life-science/linkSpecs/diseases.xml">diseases.xml</a>,</li>
  <li><a href="http://www.assembla.com/code/ldif/git/nodes/ldif/examples/life-science/linkSpecs/pathways.xml">pathways.xml</a></li>
</ul>
<p>To run the example, please download LDIF and use the following LDIF
configuration. The configuration options are explained in the Section <a href="#configuration">Configuration</a> below. <br>
</p>
<ul>
  <pre>&lt;integrationJob&gt;<br>  &lt;properties&gt;life-science.properties&lt;/properties&gt;<br>  &lt;sources&gt;sources&lt;/sources&gt;<br>  &lt;linkSpecifications&gt;linkSpecs&lt;/linkSpecifications&gt;<br>  &lt;mappings&gt;mappings&lt;/mappings&gt;<br>  &lt;output&gt;output.nq&lt;/output&gt;<br>&lt;/integrationJob&gt;</pre>
</ul>
<h4>Execution instructions</h4>
<ul>
  <li>Change into the LDIF root directory.</li>
  <li>under Linux / Mac OS type:</li>
  <ul>
    <pre>bin/ldif-integrate examples/life-science/integration-config.xml</pre>
  </ul>
  <li>under Windows type:</li>
  <ul>
    <pre>bin\ldif-integrate.bat examples\life-science\integration-config.xml</pre>
  </ul>
</ul>
<h4>Examples of data translation </h4>
<p>In the following, we explain the data translation that is performed
for the example of one entity that is described in two input data sets:</p>
<ul>
  <li><strong>Example <span style="font-style: italic;">input</span> </strong>(reduced
to two source data sets, represented using the <a href="http://www4.wiwiss.fu-berlin.de/bizer/TriG/">TriG Syntax</a>):<br>
  </li>
</ul>
<pre style="margin-left: 40px;">01:  @prefix aba-voc: &lt;http://brain-map.org/gene/0.1#&gt; .<br>02:  @prefix rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .<br>03:  @prefix uniprot: &lt;http://purl.uniprot.org/core/&gt; . <br>04: &nbsp;<br>05:  &lt;file:///aba_mouse_20101010_1000.nq&gt; {<br>06:    &lt;http://brain-map.org/mouse/brain/Oprk1.xml&gt; aba-voc:entrezgeneid "<span style="font-weight: bold;">18387</span>" ;<br>07:      aba-voc:gene-aliases _:Ab12290 .<br>08:   _:Ab12290 &lt;http://brain-map.org/gene/0.1#aliassymbol&gt; "<span style="font-weight: bold;">Oprk1</span>" .<br>09:  }<br>10:<br>11:  &lt;file:///datasets/uniprot-organism-human-reviewed-complete_1000.nq&gt; {<br>12:    &lt;http://purl.uniprot.org/uniprot/P61981&gt; rdfs:seeAlso &lt;http://purl.uniprot.org/geneid/<span style="font-weight: bold;">18387</span>&gt; .<br>13:    &lt;http://purl.uniprot.org/geneid/<span style="font-weight: bold;">18387</span>&gt; uniprot:database "GeneID" .<br>14:    &lt;http://purl.uniprot.org/uniprot/P61981&gt; uniprot:encodedBy &lt;file:///storage/datasets/uniprot-organism-human-reviewed-complete.rdf#_503237333438003B&gt; .<br>15:  }<br></pre>
<ul>
  <li><strong>Example <span style="font-style: italic;">output</span> :</strong><br>
  </li>
</ul>
<pre style="margin-left: 40px;">01: @prefix smwprop: &lt;http://mywiki/resource/property/&gt; .<br>02: @prefix xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .<br>03: <br>04: &lt;file:///aba_mouse_20101010_1000.nq&gt; {<br>05:  &nbsp;&lt;http://brain-map.org/mouse/brain/Oprk1.xml&gt; smwprop:EntrezGeneId "<span style="font-weight: bold;">18387</span>"^^xsd:int .<br>06:  &nbsp;&lt;http://brain-map.org/mouse/brain/Oprk1.xml&gt; smwprop:GeneSymbol "<span style="font-weight: bold;">Oprk1</span>"^^xsd:string .<br>07: }<br>08: <br>09: &lt;file:///datasets/uniprot-organism-human-reviewed-complete_1000.nq&gt; {<br>10:   &lt;http://brain-map.org/mouse/brain/Oprk1.xml&gt; smwprop:EntrezGeneId "<span style="font-weight: bold;">18387</span>"^^xsd:int .<br>11:   &lt;http://brain-map.org/mouse/brain/Oprk1.xml&gt; <span style="font-family: monospace;">owl:sameAs </span><span style="font-family: monospace;">&lt;file:///storage/datasets/uniprot-organism-human-reviewed-complete.rdf#_503237333438003B&gt; .</span><br>12: }<br></pre>
<p>The example input and output needs some explanation:</p>
<ul>
  <li>There are two source graphs, each containing data from a
different source: ABA (input: line 5 to 9) and Uniprot (input: line 11
to 15).</li>
</ul>
<p>Identity resolution: </p>
<ul>
  <li>Both graphs contain data about the same entity:</li>
  <ul>
    <li>In the ABA data set the entity is identified using the URI <span style="font-family: monospace;">&lt;http://brain-map.org/mouse/brain/Oprk1.xml&gt;
      </span>(input: line 6)</li>
    <li>In the Uniprot data set the entity is identified using the URI <span style="font-family: monospace;"></span><br>
      <span style="font-family: monospace;">&lt;file:///storage/datasets/uniprot-organism-human-reviewed-complete.rdf#_503237333438003B&gt;</span>
(input: line 14)</li>
  </ul>
  <li>Since the Silk identity resolution heuristic concludes that both
URIs identify the same entity, the both URIs are replaced in the output
with a single URI (in this case the ABA one, output: lines 5, 6 and 10).</li>
  <li>The rewritten URI is linked by <span style="font-family: monospace;">owl:sameAs</span> to the original URI
(output: line 11).<br>
  </li>
</ul>
<p>Data Translation: </p>
<ul>
  <li>In the target vocabulary Entrez Gene IDs should be
represented using the smwprop:EntrezGeneId property. Property values
should be represented as xsd:Integers. </li>
  <li>Thus, the
aba-voc:entrezgeneid triple in the first graph (line 6) is translated
into a smwprop:EntrezGeneId triple in the output data (line 5) and a
datatype URI is added to the literal. </li>
  <li>The
smwprop:GeneSymbol triple in line 6 of the output is generated by a
structural transformation out of the two triples in lines 7 and 8 of
the input data. </li>
  <li>In the Uniprot case the <span style="font-family: monospace;">smwprop:EntrezGeneId</span>
value was extracted from the URI string <span style="font-family: monospace;">&lt;http://purl.uniprot.org/geneid/18387&gt;
    </span><span style="font-family: sans-serif;">(input: line 12)</span><span style="font-family: monospace;"><span style="font-family: sans-serif;">.
    </span></span></li>
  <li>The quad with the property <span style="font-family: monospace;">smwprop:EntrezGeneId</span>
on line 10 in the output was produced by a complex mapping that had to
consider all three quads of the input (lines 12-14).<br>
  </li>
</ul>
<h2 id="performance">6. Performance Evaluation</h2>
<p>We regularly carry out performance evaluations. For more
details and the latest results please visit our <a href="http://www.assembla.com/spaces/ldif/wiki/Benchmark">Benchmark results</a> page.</p>
<h2 id="development">7. Source
Code and Development</h2>
<p>The latest source code is available from the <a href="http://www.assembla.com/spaces/ldif/wiki">LDIF development page</a>
on Assembla.com.</p>
<p>The framework can be used under the terms of the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache Software
License</a>.
</p>
<h2 id="history">8. Version history </h2>
<p>
</p>
<table>
  <tbody>
    <tr>
      <th> Version</th>
      <th> Release log</th>
      <th> Date</th>
    </tr>
    <tr class="odd">
      <td> 0.4</td>
      <td>Added two new implementations of the runtime environment:<br/>
1. The triple store backed implementation scales to larger data sets on a
single machine <br/>
2. The Hadoop-based implementation allows you to run LDIF on clusters with
multiple machines <br/>

      </td>
      <td> 01/10/2012</td>
    </tr>
    <tr class="even">
      <td> 0.3</td>
      <td>Access module support (data set dump, SPARQL, crawling)<br>
Scheduler for running import and integration tasks automatically<br>
Configuration file XML schemas for validation<br>
URI minting<br>
Second use case from the music domain<br>
      </td>
      <td> 10/06/2011</td>
    </tr>
    <tr class="odd">
      <td> 0.2</td>
      <td> R2R data translation tasks are now executed in parallel <br>
Perform source syntax validation before loading data (optional) <br>
Support for external sameAs links <br>
RDF/N-Triples data output module <br>
Support for bzip2 source compression <br>
Improved loading performance <br>
Memory usage improvements: caching factum rows and string interning
only for relevant data </td>
      <td> 8/25/2011</td>
    </tr>
    <tr class="even">
      <td> 0.1</td>
      <td> Intial release of LDIF</td>
      <td> 6/29/2011</td>
    </tr>
  </tbody>
</table>
<h2 id="feedback">9. Support and Feedback </h2>
<p>For questions and feedback please use the <a href="http://groups.google.com/group/ldif?hl=en">LDIF Google Group</a>.
</p>
<h2 id="references">10. References</h2>
<ul>
</ul>
<ul>
</ul>
<ol>
	  <li>Christian Becker, Andrea Matteini: LDIF - Linked Data Integration Framework ( <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BeckerMatteini-LDIF-SemTechBerlin2012-Talk.pdf">Slides</a> ). SemTechBiz 2012, Berlin, February 2012.</li>
  <li>Andreas Schultz, Andrea Matteini, Robert Isele, Christian Bizer,
Christian Becker: <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/Schultz-etal-Cold2011-LDIF-Paper.pdf">LDIF
- Linked Data Integration Framework</a>. 2nd International Workshop on
Consuming Linked Data, Bonn, Germany, October 2011.</li>
<li>William
	Smith, Christian Becker and Andreas Schultz: Neurowiki: How we
	integrated large datasets into SMW with R2R and Silk / LDIF ( Slides <a href="http://semantic-mediawiki.org/w/images/a/ac/SMWCon_2011_Neurowiki_Presentation.pdf">part
	1</a>, <a href="http://semantic-mediawiki.org/w/images/b/b7/SMWCon_2011_Neurowiki_Becker_Schultz.pdf">part
	2</a> ). SMWCon Fall 2011, Berlin, September 2011.</li>
  <li>Tom Heath, Christian Bizer: <a href="http://www.morganclaypool.com/doi/abs/10.2200/S00334ED1V01Y201102WBE001">Linked
Data: Evolving the Web into a Global Data Space</a>. Synthesis
Lectures on the Semantic Web: Theory and Technology, Morgan &amp;
Claypool Publishers, ISBN <a href="http://www.amazon.com/Linked-Data-Synthesis-Lectures-Engineering/dp/1608454304/ref=sr_1_1?ie=UTF8&amp;s=books&amp;qid=1297846088&amp;sr=8-1">978160845431</a>,
2011 ( <a href="http://linkeddatabook.com/">Free HTML version</a> ).</li>
  <li>Christian Bizer, Andreas Schultz: <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BizerSchultz-COLD-R2R-Paper.pdf">The
R2R Framework: Publishing and Discovering Mappings on the Web</a> ( <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BizerSchultz-COLD-R2R-Talk.pdf">Slides</a>
). 1st International Workshop on Consuming Linked Data (COLD
2010), Shanghai, November 2010. </li>
  <li>Robert Isele, Anja Jentzsch, Christian Bizer: <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/IseleJentzschBizer-Silk-Cold2010.pdf">Silk
Server - Adding missing Links while consuming Linked Data</a> ( <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/IseleJentzschBizer-Silk-Cold2010-Talk.pdf">Slides</a>
). 1st International Workshop on Consuming Linked Data (COLD
2010), Shanghai, November 2010.</li>
  <li>Julius Volz, Christian Bizer, Martin Gaedke, Georgi Kobilarov: <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/VolzBizerGaedkeKobilarov-ISWC2009-Silk.pdf">Discovering
and Maintaining Links on the Web of Data</a> ( <a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/VolzBizerGaedkeKobilarov-ISWC2009-Silk-Talk.pdf">Slides</a>
). International Semantic Web Conference (ISWC2009),
Westfields, USA, October 2009. </li>
</ol>
<h2 id="acknowledgments">11. Acknowledgments </h2>
<p>This work was supported in part by Vulcan Inc. as part of its <a href="http://www.projecthalo.com">Project Halo</a> and by the EU FP7
project <a href="http://lod2.eu/">LOD2 - Creating Knowledge out of
Interlinked Data</a> (Grant No. 257943). </p>
<p>WooFunction icon set licensed under <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.</p>
</div>

</body></html>
