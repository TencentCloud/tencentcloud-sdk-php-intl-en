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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of blocking/unblocking URLs
 *
 * @method array getSuccessUrls() Obtain List of succeeded URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSuccessUrls(array $SuccessUrls) Set List of succeeded URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getFailUrls() Obtain List of failed URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFailUrls(array $FailUrls) Set List of failed URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CacheOptResult extends AbstractModel
{
    /**
     * @var array List of succeeded URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SuccessUrls;

    /**
     * @var array List of failed URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FailUrls;

    /**
     * @param array $SuccessUrls List of succeeded URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $FailUrls List of failed URLs
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("SuccessUrls",$param) and $param["SuccessUrls"] !== null) {
            $this->SuccessUrls = $param["SuccessUrls"];
        }

        if (array_key_exists("FailUrls",$param) and $param["FailUrls"] !== null) {
            $this->FailUrls = $param["FailUrls"];
        }
    }
}
