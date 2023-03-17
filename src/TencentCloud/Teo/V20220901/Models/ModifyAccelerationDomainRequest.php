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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccelerationDomain request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the accelerated domain name.
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the accelerated domain name.
 * @method string getDomainName() Obtain Accelerated domain name
 * @method void setDomainName(string $DomainName) Set Accelerated domain name
 * @method OriginInfo getOriginInfo() Obtain Details of the origin.
 * @method void setOriginInfo(OriginInfo $OriginInfo) Set Details of the origin.
 */
class ModifyAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the accelerated domain name.
     */
    public $ZoneId;

    /**
     * @var string Accelerated domain name
     */
    public $DomainName;

    /**
     * @var OriginInfo Details of the origin.
     */
    public $OriginInfo;

    /**
     * @param string $ZoneId ID of the site related with the accelerated domain name.
     * @param string $DomainName Accelerated domain name
     * @param OriginInfo $OriginInfo Details of the origin.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new OriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }
    }
}
