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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of permission requests to allow a mini program calling sensitive APIs
 *
 * @method integer getTotalCount() Obtain Total number of entries
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries
 * @method array getDataList() Obtain List information
 * @method void setDataList(array $DataList) Set List information
 */
class DescribeMNPSensitiveAPIPermissionApprovalListResp extends AbstractModel
{
    /**
     * @var integer Total number of entries
     */
    public $TotalCount;

    /**
     * @var array List information
     */
    public $DataList;

    /**
     * @param integer $TotalCount Total number of entries
     * @param array $DataList List information
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

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new DescribeMNPSensitiveAPIPermissionApprovalListData();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
