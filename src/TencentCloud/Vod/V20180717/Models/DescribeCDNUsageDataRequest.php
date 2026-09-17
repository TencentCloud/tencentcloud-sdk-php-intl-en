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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNUsageData request structure.
 *
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method string getDataType() Obtain 
 * @method void setDataType(string $DataType) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method integer getDataInterval() Obtain 
 * @method void setDataInterval(integer $DataInterval) Set 
 * @method array getDomainNames() Obtain 
 * @method void setDomainNames(array $DomainNames) Set 
 */
class DescribeCDNUsageDataRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var string 
     */
    public $DataType;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var integer 
     */
    public $DataInterval;

    /**
     * @var array 
     */
    public $DomainNames;

    /**
     * @param string $StartTime 
     * @param string $EndTime 
     * @param string $DataType 
     * @param integer $SubAppId 
     * @param integer $DataInterval 
     * @param array $DomainNames 
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("DataInterval",$param) and $param["DataInterval"] !== null) {
            $this->DataInterval = $param["DataInterval"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }
    }
}
