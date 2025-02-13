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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExtensions request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getPageNumber() Obtain Page number (starting from 0).
 * @method void setPageNumber(integer $PageNumber) Set Page number (starting from 0).
 * @method array getExtensionIds() Obtain Filtering extension number list.
 * @method void setExtensionIds(array $ExtensionIds) Set Filtering extension number list.
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 * @method string getFuzzingKeyWord() Obtain Fuzzy query field (fuzzy query for extension number, extension name, agent email, and agent name).
 * @method void setFuzzingKeyWord(string $FuzzingKeyWord) Set Fuzzy query field (fuzzy query for extension number, extension name, agent email, and agent name).
 * @method boolean getIsNeedStatus() Obtain Whether to return the current status of the telephone or not.
 * @method void setIsNeedStatus(boolean $IsNeedStatus) Set Whether to return the current status of the telephone or not.
 */
class DescribeExtensionsRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page number (starting from 0).
     */
    public $PageNumber;

    /**
     * @var array Filtering extension number list.
     */
    public $ExtensionIds;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @var string Fuzzy query field (fuzzy query for extension number, extension name, agent email, and agent name).
     */
    public $FuzzingKeyWord;

    /**
     * @var boolean Whether to return the current status of the telephone or not.
     */
    public $IsNeedStatus;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $PageNumber Page number (starting from 0).
     * @param array $ExtensionIds Filtering extension number list.
     * @param integer $PageSize Page size.
     * @param string $FuzzingKeyWord Fuzzy query field (fuzzy query for extension number, extension name, agent email, and agent name).
     * @param boolean $IsNeedStatus Whether to return the current status of the telephone or not.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("ExtensionIds",$param) and $param["ExtensionIds"] !== null) {
            $this->ExtensionIds = $param["ExtensionIds"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FuzzingKeyWord",$param) and $param["FuzzingKeyWord"] !== null) {
            $this->FuzzingKeyWord = $param["FuzzingKeyWord"];
        }

        if (array_key_exists("IsNeedStatus",$param) and $param["IsNeedStatus"] !== null) {
            $this->IsNeedStatus = $param["IsNeedStatus"];
        }
    }
}
