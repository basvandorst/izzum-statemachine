<?php
namespace izzum\command;
use izzum\command\Command;

/**
 * Does absolutely nothing.
 * This command provides null behaviour and has no side effects.
 *
 * @author Rolf Vreijdenberger
 *        
 */
class Null extends Command {

    protected function _execute()
    {}
}