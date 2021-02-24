<?php
/**
 * Calls pipline.py with neccessary arguments to find global solution
 * TODO: call with different arguments needs to be implemented
 *
 * @return string
 */

function findGlobalSoln() {
  $command = escapeshellcmd('../.venv/bin/python3 pipeline.py -f ./graph.json');
  // find a way to catch if error occurs
  $output = shell_exec($command);
  return $output;
}