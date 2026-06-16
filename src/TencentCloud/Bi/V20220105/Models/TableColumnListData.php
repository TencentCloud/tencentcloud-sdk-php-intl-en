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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data list of all column names in the table
 *
 * @method array getList() Obtain Column list in the table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setList(array $List) Set Column list in the table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTranId() Obtain async transaction id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranId(string $TranId) Set async transaction id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranStatus() Obtain Async transaction status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranStatus(integer $TranStatus) Set Async transaction status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableColumnListData extends AbstractModel
{
    /**
     * @var array Column list in the table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $List;

    /**
     * @var string async transaction id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranId;

    /**
     * @var integer Async transaction status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranStatus;

    /**
     * @param array $List Column list in the table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TranId async transaction id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranStatus Async transaction status
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new TableColumn();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }
    }
}
