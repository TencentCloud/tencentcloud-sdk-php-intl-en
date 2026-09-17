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
 * DescribeAigcUsageData request structure.
 *
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method string getAigcType() Obtain 
 * @method void setAigcType(string $AigcType) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getAPIKey() Obtain <p>API Key</p>
 * @method void setAPIKey(string $APIKey) Set <p>API Key</p>
 * @method array getAPIKeys() Obtain <p>API Key</p>
 * @method void setAPIKeys(array $APIKeys) Set <p>API Key</p>
 * @method string getScrollToken() Obtain 
 * @method void setScrollToken(string $ScrollToken) Set 
 * @method integer getPageSize() Obtain 
 * @method void setPageSize(integer $PageSize) Set 
 * @method string getReqId() Obtain 
 * @method void setReqId(string $ReqId) Set 
 */
class DescribeAigcUsageDataRequest extends AbstractModel
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
    public $AigcType;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string <p>API Key</p>
     */
    public $APIKey;

    /**
     * @var array <p>API Key</p>
     */
    public $APIKeys;

    /**
     * @var string 
     */
    public $ScrollToken;

    /**
     * @var integer 
     */
    public $PageSize;

    /**
     * @var string 
     */
    public $ReqId;

    /**
     * @param string $StartTime 
     * @param string $EndTime 
     * @param string $AigcType 
     * @param integer $SubAppId 
     * @param string $APIKey <p>API Key</p>
     * @param array $APIKeys <p>API Key</p>
     * @param string $ScrollToken 
     * @param integer $PageSize 
     * @param string $ReqId 
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

        if (array_key_exists("AigcType",$param) and $param["AigcType"] !== null) {
            $this->AigcType = $param["AigcType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("APIKeys",$param) and $param["APIKeys"] !== null) {
            $this->APIKeys = $param["APIKeys"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }
    }
}
