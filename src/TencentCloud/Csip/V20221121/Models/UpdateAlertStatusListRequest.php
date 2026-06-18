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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAlertStatusList request structure.
 *
 * @method array getID() Obtain Alarm ID list
 * @method void setID(array $ID) Set Alarm ID list
 * @method integer getOperateType() Obtain Operation type. 
1: Revoke disposal 
2: Marked with processed 
3: Marked as ignored 
4: Cancel tag disposal
5: Unmark ignore
 * @method void setOperateType(integer $OperateType) Set Operation type. 
1: Revoke disposal 
2: Marked with processed 
3: Marked as ignored 
4: Cancel tag disposal
5: Unmark ignore
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getOperatedMemberId() Obtain Member ID of the Called Group Account
 * @method void setOperatedMemberId(array $OperatedMemberId) Set Member ID of the Called Group Account
 */
class UpdateAlertStatusListRequest extends AbstractModel
{
    /**
     * @var array Alarm ID list
     */
    public $ID;

    /**
     * @var integer Operation type. 
1: Revoke disposal 
2: Marked with processed 
3: Marked as ignored 
4: Cancel tag disposal
5: Unmark ignore
     */
    public $OperateType;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Member ID of the Called Group Account
     */
    public $OperatedMemberId;

    /**
     * @param array $ID Alarm ID list
     * @param integer $OperateType Operation type. 
1: Revoke disposal 
2: Marked with processed 
3: Marked as ignored 
4: Cancel tag disposal
5: Unmark ignore
     * @param array $MemberId Group Account Member ID
     * @param array $OperatedMemberId Member ID of the Called Group Account
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = [];
            foreach ($param["ID"] as $key => $value){
                $obj = new NewAlertKey();
                $obj->deserialize($value);
                array_push($this->ID, $obj);
            }
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }
    }
}
