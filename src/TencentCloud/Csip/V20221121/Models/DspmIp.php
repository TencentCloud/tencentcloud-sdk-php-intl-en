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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm Ip information
 *
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getIpType() Obtain ip type. public: public network; private: private network
 * @method void setIpType(string $IpType) Set ip type. public: public network; private: private network
 * @method string getRemark() Obtain ip tag information
 * @method void setRemark(string $Remark) Set ip tag information
 * @method integer getIsRemarked() Obtain Whether it has been tagged with information
 * @method void setIsRemarked(integer $IsRemarked) Set Whether it has been tagged with information
 * @method string getResourceInstanceId() Obtain ip belongs to the instance id
 * @method void setResourceInstanceId(string $ResourceInstanceId) Set ip belongs to the instance id
 * @method string getResourceType() Obtain ip-associated product
 * @method void setResourceType(string $ResourceType) Set ip-associated product
 * @method DspmArea getArea() Obtain ip region
 * @method void setArea(DspmArea $Area) Set ip region
 * @method integer getIsNewIp() Obtain Whether it is a new ip address
 * @method void setIsNewIp(integer $IsNewIp) Set Whether it is a new ip address
 */
class DspmIp extends AbstractModel
{
    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string ip type. public: public network; private: private network
     */
    public $IpType;

    /**
     * @var string ip tag information
     */
    public $Remark;

    /**
     * @var integer Whether it has been tagged with information
     */
    public $IsRemarked;

    /**
     * @var string ip belongs to the instance id
     */
    public $ResourceInstanceId;

    /**
     * @var string ip-associated product
     */
    public $ResourceType;

    /**
     * @var DspmArea ip region
     */
    public $Area;

    /**
     * @var integer Whether it is a new ip address
     */
    public $IsNewIp;

    /**
     * @param string $Ip IP address
     * @param string $IpType ip type. public: public network; private: private network
     * @param string $Remark ip tag information
     * @param integer $IsRemarked Whether it has been tagged with information
     * @param string $ResourceInstanceId ip belongs to the instance id
     * @param string $ResourceType ip-associated product
     * @param DspmArea $Area ip region
     * @param integer $IsNewIp Whether it is a new ip address
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsRemarked",$param) and $param["IsRemarked"] !== null) {
            $this->IsRemarked = $param["IsRemarked"];
        }

        if (array_key_exists("ResourceInstanceId",$param) and $param["ResourceInstanceId"] !== null) {
            $this->ResourceInstanceId = $param["ResourceInstanceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = new DspmArea();
            $this->Area->deserialize($param["Area"]);
        }

        if (array_key_exists("IsNewIp",$param) and $param["IsNewIp"] !== null) {
            $this->IsNewIp = $param["IsNewIp"];
        }
    }
}
