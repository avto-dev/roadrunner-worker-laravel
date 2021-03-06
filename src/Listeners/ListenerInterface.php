<?php

namespace AvtoDev\RoadRunnerLaravel\Listeners;

interface ListenerInterface
{
    /**
     * Handle the event.
     *
     * @param string|object $event
     *
     * @return void
     */
    public function handle($event): void;
}
