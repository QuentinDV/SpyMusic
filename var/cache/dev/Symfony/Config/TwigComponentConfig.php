<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigComponent'.\DIRECTORY_SEPARATOR.'DefaultsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigComponentConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaults;
    private $anonymousTemplateDirectory;
    private $profiler;
    private $controllersJson;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * @default ["__deprecated__use_old_naming_behavior"]
     * @return \Symfony\Config\TwigComponent\DefaultsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigComponent\DefaultsConfig : static)
     */
    public function defaults(string $namespace, string|array $value = []): \Symfony\Config\TwigComponent\DefaultsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults[$namespace] = $value;

            return $this;
        }

        if (!isset($this->defaults[$namespace]) || !$this->defaults[$namespace] instanceof \Symfony\Config\TwigComponent\DefaultsConfig) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults[$namespace] = new \Symfony\Config\TwigComponent\DefaultsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "defaults()" has already been initialized. You cannot pass values the second time you call defaults().');
        }

        return $this->defaults[$namespace];
    }

    /**
     * Defaults to `components`
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function anonymousTemplateDirectory($value): static
    {
        $this->_usedProperties['anonymousTemplateDirectory'] = true;
        $this->anonymousTemplateDirectory = $value;

        return $this;
    }

    /**
     * Enables the profiler for Twig Component (in debug mode)
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function profiler($value): static
    {
        $this->_usedProperties['profiler'] = true;
        $this->profiler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "twig_component.controllers_json" config option is deprecated, and will be removed in 3.0.
     * @return $this
     */
    public function controllersJson($value): static
    {
        $this->_usedProperties['controllersJson'] = true;
        $this->controllersJson = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'twig_component';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('defaults', $value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\TwigComponent\DefaultsConfig($v) : $v, $value['defaults']);
            unset($value['defaults']);
        }

        if (array_key_exists('anonymous_template_directory', $value)) {
            $this->_usedProperties['anonymousTemplateDirectory'] = true;
            $this->anonymousTemplateDirectory = $value['anonymous_template_directory'];
            unset($value['anonymous_template_directory']);
        }

        if (array_key_exists('profiler', $value)) {
            $this->_usedProperties['profiler'] = true;
            $this->profiler = $value['profiler'];
            unset($value['profiler']);
        }

        if (array_key_exists('controllers_json', $value)) {
            $this->_usedProperties['controllersJson'] = true;
            $this->controllersJson = $value['controllers_json'];
            unset($value['controllers_json']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = array_map(fn ($v) => $v instanceof \Symfony\Config\TwigComponent\DefaultsConfig ? $v->toArray() : $v, $this->defaults);
        }
        if (isset($this->_usedProperties['anonymousTemplateDirectory'])) {
            $output['anonymous_template_directory'] = $this->anonymousTemplateDirectory;
        }
        if (isset($this->_usedProperties['profiler'])) {
            $output['profiler'] = $this->profiler;
        }
        if (isset($this->_usedProperties['controllersJson'])) {
            $output['controllers_json'] = $this->controllersJson;
        }

        return $output;
    }

}
