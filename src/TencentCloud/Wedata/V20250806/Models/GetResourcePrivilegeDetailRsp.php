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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResourcePrivilegeDetailRsp
 *
 * @method array getDetails() Obtain List of permission details.
 * @method void setDetails(array $Details) Set List of permission details.
 * @method integer getTotalCount() Obtain Total.
 * @method void setTotalCount(integer $TotalCount) Set Total.
 */
class GetResourcePrivilegeDetailRsp extends AbstractModel
{
    /**
     * @var array List of permission details.
     */
    public $Details;

    /**
     * @var integer Total.
     */
    public $TotalCount;

    /**
     * @param array $Details List of permission details.
     * @param integer $TotalCount Total.
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
        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ResourcePrivilegeDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
