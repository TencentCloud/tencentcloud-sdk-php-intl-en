<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Optional web component information
 *
 * @method string getType() Obtain Type.
 * @method void setType(string $Type) Set Type.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method string getPublicUrl() Obtain Public url
 * @method void setPublicUrl(string $PublicUrl) Set Public url
 * @method string getPrivateUrl() Obtain Private network url
 * @method void setPrivateUrl(string $PrivateUrl) Set Private network url
 * @method string getPublicAccess() Obtain Public access permissions
 * @method void setPublicAccess(string $PublicAccess) Set Public access permissions
 * @method string getPrivateAccess() Obtain Private network access permission
 * @method void setPrivateAccess(string $PrivateAccess) Set Private network access permission
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getPrivateVip() Obtain Intranet vip of the web service
 * @method void setPrivateVip(string $PrivateVip) Set Intranet vip of the web service
 * @method string getCustomPrivateUrl() Obtain Custom url of cerebro on the private network
 * @method void setCustomPrivateUrl(string $CustomPrivateUrl) Set Custom url of cerebro on the private network
 */
class OptionalWebServiceInfo extends AbstractModel
{
    /**
     * @var string Type.
     */
    public $Type;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var string Public url
     */
    public $PublicUrl;

    /**
     * @var string Private network url
     */
    public $PrivateUrl;

    /**
     * @var string Public access permissions
     */
    public $PublicAccess;

    /**
     * @var string Private network access permission
     */
    public $PrivateAccess;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Intranet vip of the web service
     */
    public $PrivateVip;

    /**
     * @var string Custom url of cerebro on the private network
     */
    public $CustomPrivateUrl;

    /**
     * @param string $Type Type.
     * @param integer $Status Status.
     * @param string $PublicUrl Public url
     * @param string $PrivateUrl Private network url
     * @param string $PublicAccess Public access permissions
     * @param string $PrivateAccess Private network access permission
     * @param string $Version Version
     * @param string $PrivateVip Intranet vip of the web service
     * @param string $CustomPrivateUrl Custom url of cerebro on the private network
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicUrl",$param) and $param["PublicUrl"] !== null) {
            $this->PublicUrl = $param["PublicUrl"];
        }

        if (array_key_exists("PrivateUrl",$param) and $param["PrivateUrl"] !== null) {
            $this->PrivateUrl = $param["PrivateUrl"];
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("PrivateVip",$param) and $param["PrivateVip"] !== null) {
            $this->PrivateVip = $param["PrivateVip"];
        }

        if (array_key_exists("CustomPrivateUrl",$param) and $param["CustomPrivateUrl"] !== null) {
            $this->CustomPrivateUrl = $param["CustomPrivateUrl"];
        }
    }
}
