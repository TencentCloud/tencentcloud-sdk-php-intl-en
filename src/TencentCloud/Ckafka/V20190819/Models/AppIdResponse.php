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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `AppId` query result
 *
 * @method integer getTotalCount() Obtain Number of eligible `AppId`
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible `AppId`
 * @method array getAppIdList() Obtain List of eligible `AppId`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAppIdList(array $AppIdList) Set List of eligible `AppId`
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AppIdResponse extends AbstractModel
{
    /**
     * @var integer Number of eligible `AppId`
     */
    public $TotalCount;

    /**
     * @var array List of eligible `AppId`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AppIdList;

    /**
     * @param integer $TotalCount Number of eligible `AppId`
     * @param array $AppIdList List of eligible `AppId`
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AppIdList",$param) and $param["AppIdList"] !== null) {
            $this->AppIdList = $param["AppIdList"];
        }
    }
}
