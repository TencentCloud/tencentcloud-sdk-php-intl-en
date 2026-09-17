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
 * DescribeAigcQuotas request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getQuotaType() Obtain 
 * @method void setQuotaType(string $QuotaType) Set 
 * @method string getApiToken() Obtain 
 * @method void setApiToken(string $ApiToken) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 */
class DescribeAigcQuotasRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $QuotaType;

    /**
     * @var string 
     */
    public $ApiToken;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @param integer $SubAppId 
     * @param string $QuotaType 
     * @param string $ApiToken 
     * @param integer $Limit 
     * @param integer $Offset 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
