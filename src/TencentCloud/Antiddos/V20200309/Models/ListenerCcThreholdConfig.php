<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC protection thresholds of the domain name and protocol
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getProtocol() Obtain Protocol. Value: htttps
 * @method void setProtocol(string $Protocol) Set Protocol. Value: htttps
 * @method integer getCCEnable() Obtain Status. Valid values: `0` (disabled), `1` (enabled).
 * @method void setCCEnable(integer $CCEnable) Set Status. Valid values: `0` (disabled), `1` (enabled).
 * @method integer getCCThreshold() Obtain CC protection threshold
 * @method void setCCThreshold(integer $CCThreshold) Set CC protection threshold
 */
class ListenerCcThreholdConfig extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Protocol. Value: htttps
     */
    public $Protocol;

    /**
     * @var integer Status. Valid values: `0` (disabled), `1` (enabled).
     */
    public $CCEnable;

    /**
     * @var integer CC protection threshold
     */
    public $CCThreshold;

    /**
     * @param string $Domain Domain name
     * @param string $Protocol Protocol. Value: htttps
     * @param integer $CCEnable Status. Valid values: `0` (disabled), `1` (enabled).
     * @param integer $CCThreshold CC protection threshold
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }
    }
}
