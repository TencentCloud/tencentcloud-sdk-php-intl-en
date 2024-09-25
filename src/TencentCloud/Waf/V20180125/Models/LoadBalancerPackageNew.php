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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB
 *
 * @method string getListenerId() Obtain Listener ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set Listener ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain Listening Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListenerName(string $ListenerName) Set Listening Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerId() Obtain CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerName() Obtain CLB name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
"Toronto": "ca",
"Guangzhou": "gz",
"Chengdu": "cd",
"Fuzhou": "fzec",
"Shenzhen": "szx",
"India": "in",
"Jinan": "jnec",
"Chongqing": "cq",
"Tianjin": "tsn",
"Northeast Europe": "ru",
"Nanjing": "nj",
"Silicon Valley (U.S.)": "usw",
"Thailand": "th",
"Guangzhou Open": "gzopen",
"Shenzhen Finance": "szjr",
"Frankfurt": "de",
"Japan": "jp",
"Virginia": "use",
"Beijing": "bj",
"Hong Kong (China)": "hk",
"Hangzhou": "hzec",
"Beijing Finance": "bjjr",
"Shanghai Finance": "shjr",
"Taipei (China)": "tpe",
"Seoul": "kr",
"Shanghai": "sh",
"Singapore": "sg",
"Qingyuan": "qy"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
"Toronto": "ca",
"Guangzhou": "gz",
"Chengdu": "cd",
"Fuzhou": "fzec",
"Shenzhen": "szx",
"India": "in",
"Jinan": "jnec",
"Chongqing": "cq",
"Tianjin": "tsn",
"Northeast Europe": "ru",
"Nanjing": "nj",
"Silicon Valley (U.S.)": "usw",
"Thailand": "th",
"Guangzhou Open": "gzopen",
"Shenzhen Finance": "szjr",
"Frankfurt": "de",
"Japan": "jp",
"Virginia": "use",
"Beijing": "bj",
"Hong Kong (China)": "hk",
"Hangzhou": "hzec",
"Beijing Finance": "bjjr",
"Shanghai Finance": "shjr",
"Taipei (China)": "tpe",
"Seoul": "kr",
"Shanghai": "sh",
"Singapore": "sg",
"Qingyuan": "qy"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain Access IP

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set Access IP

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain Access Port

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set Access Port

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNumericalVpcId() Obtain VPCID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set VPCID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerType() Obtain CLB Type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB Type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerDomain() Obtain Domain Name of CLB

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set Domain Name of CLB

Note: This field may return null, indicating that no valid values can be obtained.
 */
class LoadBalancerPackageNew extends AbstractModel
{
    /**
     * @var string Listener ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Listening Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerName;

    /**
     * @var string CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerName;

    /**
     * @var string Protocol

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Region
"Toronto": "ca",
"Guangzhou": "gz",
"Chengdu": "cd",
"Fuzhou": "fzec",
"Shenzhen": "szx",
"India": "in",
"Jinan": "jnec",
"Chongqing": "cq",
"Tianjin": "tsn",
"Northeast Europe": "ru",
"Nanjing": "nj",
"Silicon Valley (U.S.)": "usw",
"Thailand": "th",
"Guangzhou Open": "gzopen",
"Shenzhen Finance": "szjr",
"Frankfurt": "de",
"Japan": "jp",
"Virginia": "use",
"Beijing": "bj",
"Hong Kong (China)": "hk",
"Hangzhou": "hzec",
"Beijing Finance": "bjjr",
"Shanghai Finance": "shjr",
"Taipei (China)": "tpe",
"Seoul": "kr",
"Shanghai": "sh",
"Singapore": "sg",
"Qingyuan": "qy"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Access IP

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer Access Port

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var string Region

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var integer VPCID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumericalVpcId;

    /**
     * @var string CLB Type

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerType;

    /**
     * @var string Domain Name of CLB

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerDomain;

    /**
     * @param string $ListenerId Listener ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ListenerName Listening Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerId CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerName CLB name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region
"Toronto": "ca",
"Guangzhou": "gz",
"Chengdu": "cd",
"Fuzhou": "fzec",
"Shenzhen": "szx",
"India": "in",
"Jinan": "jnec",
"Chongqing": "cq",
"Tianjin": "tsn",
"Northeast Europe": "ru",
"Nanjing": "nj",
"Silicon Valley (U.S.)": "usw",
"Thailand": "th",
"Guangzhou Open": "gzopen",
"Shenzhen Finance": "szjr",
"Frankfurt": "de",
"Japan": "jp",
"Virginia": "use",
"Beijing": "bj",
"Hong Kong (China)": "hk",
"Hangzhou": "hzec",
"Beijing Finance": "bjjr",
"Shanghai Finance": "shjr",
"Taipei (China)": "tpe",
"Seoul": "kr",
"Shanghai": "sh",
"Singapore": "sg",
"Qingyuan": "qy"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip Access IP

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Vport Access Port

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Region

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NumericalVpcId VPCID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerType CLB Type

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerDomain Domain Name of CLB

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }
    }
}
