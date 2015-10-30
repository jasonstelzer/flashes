<?php
namespace Jasonstelzer\Flashes;

use Illuminate\Session\Store;

class FlashesNotifier
{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an informational message
     *
     * @param string $message
     */
    public function info($message)
    {
        $this->message($message, 'info');

        return $this;
    }

    /**
     * Flash a success message
     *
     * @param string $message
     */
    public function success($message)
    {
        $this->message($message, 'success');

        return $this;
    }

    /**
     * Flash a warning message
     *
     * @param string $message
     */
    public function warning($message)
    {
        $this->message($message, 'warning');

        return $this;
    }

    /**
     * Flash an error message
     *
     * @param string $message
     */
    public function error($message)
    {
        $this->message($message, 'danger');

        return $this;
    }

    /**
     * Creates the flash message in the session. If other flash messages already exist,
     * append new message to the end
     *
     * @param string $message
     * @param string $level
     */
    public function message($message, $level = 'info')
    {
        $messages = $this->session->has('flashes') ? $this->session->get('flashes') : [];

        array_push($messages, compact('level', 'message'));

        $this->session->flash('flashes', $messages);

        return $this;
    }
}
