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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag information.
 *
 * @method string getTagKey() Obtain Cost allocation tag key.
 * @method void setTagKey(string $TagKey) Set Cost allocation tag key.
 * @method integer getStatus() Obtain Tag type. Valid values: `0` (general tags), `1` (cost allocation tags).
 * @method void setStatus(integer $Status) Set Tag type. Valid values: `0` (general tags), `1` (cost allocation tags).
 * @method string getUpdateTime() Obtain Time to set the cost allocation tag. It will not be returned if `Status` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Time to set the cost allocation tag. It will not be returned if `Status` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TagDataInfo extends AbstractModel
{
    /**
     * @var string Cost allocation tag key.
     */
    public $TagKey;

    /**
     * @var integer Tag type. Valid values: `0` (general tags), `1` (cost allocation tags).
     */
    public $Status;

    /**
     * @var string Time to set the cost allocation tag. It will not be returned if `Status` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $TagKey Cost allocation tag key.
     * @param integer $Status Tag type. Valid values: `0` (general tags), `1` (cost allocation tags).
     * @param string $UpdateTime Time to set the cost allocation tag. It will not be returned if `Status` is `0`.
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
