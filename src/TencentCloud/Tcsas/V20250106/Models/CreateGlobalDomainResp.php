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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response of creating a global domain name
 *
 * @method boolean getResult() Obtain Result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(boolean $Result) Set Result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRepeatUrls() Obtain List of duplicate domain names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepeatUrls(array $RepeatUrls) Set List of duplicate domain names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExistsWhiteUrls() Obtain List of allowed domain names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExistsWhiteUrls(array $ExistsWhiteUrls) Set List of allowed domain names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExistsBlackUrls() Obtain List of blocked domain names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExistsBlackUrls(array $ExistsBlackUrls) Set List of blocked domain names
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateGlobalDomainResp extends AbstractModel
{
    /**
     * @var boolean Result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @var array List of duplicate domain names
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RepeatUrls;

    /**
     * @var array List of allowed domain names
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExistsWhiteUrls;

    /**
     * @var array List of blocked domain names
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExistsBlackUrls;

    /**
     * @param boolean $Result Result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RepeatUrls List of duplicate domain names
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExistsWhiteUrls List of allowed domain names
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExistsBlackUrls List of blocked domain names
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("RepeatUrls",$param) and $param["RepeatUrls"] !== null) {
            $this->RepeatUrls = $param["RepeatUrls"];
        }

        if (array_key_exists("ExistsWhiteUrls",$param) and $param["ExistsWhiteUrls"] !== null) {
            $this->ExistsWhiteUrls = $param["ExistsWhiteUrls"];
        }

        if (array_key_exists("ExistsBlackUrls",$param) and $param["ExistsBlackUrls"] !== null) {
            $this->ExistsBlackUrls = $param["ExistsBlackUrls"];
        }
    }
}
