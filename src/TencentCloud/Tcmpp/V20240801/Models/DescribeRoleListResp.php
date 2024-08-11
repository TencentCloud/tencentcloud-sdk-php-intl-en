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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role management list
 *
 * @method integer getTotalCount() Obtain Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDataList() Obtain List data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataList(array $DataList) Set List data
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeRoleListResp extends AbstractModel
{
    /**
     * @var integer Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataList;

    /**
     * @param integer $TotalCount Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DataList List data
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new DescribeRoleListData();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
