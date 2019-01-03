<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddMultipleStreamMixService
 *
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getMixStreamName()
 * @method string getMixDomainName()
 * @method string getOwnerId()
 * @method string getMixAppName()
 * @method string getStreamName()
 */
class AddMultipleStreamMixService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'AddMultipleStreamMixService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withAppName() instead.
     *
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        return $this->withAppName($appName);
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function withAppName($appName)
    {
        $this->data['AppName'] = $appName;
        $this->options['query']['AppName'] = $appName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMixStreamName() instead.
     *
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function setMixStreamName($mixStreamName)
    {
        return $this->withMixStreamName($mixStreamName);
    }

    /**
     * @param string $mixStreamName
     *
     * @return $this
     */
    public function withMixStreamName($mixStreamName)
    {
        $this->data['MixStreamName'] = $mixStreamName;
        $this->options['query']['MixStreamName'] = $mixStreamName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMixDomainName() instead.
     *
     * @param string $mixDomainName
     *
     * @return $this
     */
    public function setMixDomainName($mixDomainName)
    {
        return $this->withMixDomainName($mixDomainName);
    }

    /**
     * @param string $mixDomainName
     *
     * @return $this
     */
    public function withMixDomainName($mixDomainName)
    {
        $this->data['MixDomainName'] = $mixDomainName;
        $this->options['query']['MixDomainName'] = $mixDomainName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMixAppName() instead.
     *
     * @param string $mixAppName
     *
     * @return $this
     */
    public function setMixAppName($mixAppName)
    {
        return $this->withMixAppName($mixAppName);
    }

    /**
     * @param string $mixAppName
     *
     * @return $this
     */
    public function withMixAppName($mixAppName)
    {
        $this->data['MixAppName'] = $mixAppName;
        $this->options['query']['MixAppName'] = $mixAppName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStreamName() instead.
     *
     * @param string $streamName
     *
     * @return $this
     */
    public function setStreamName($streamName)
    {
        return $this->withStreamName($streamName);
    }

    /**
     * @param string $streamName
     *
     * @return $this
     */
    public function withStreamName($streamName)
    {
        $this->data['StreamName'] = $streamName;
        $this->options['query']['StreamName'] = $streamName;

        return $this;
    }
}
