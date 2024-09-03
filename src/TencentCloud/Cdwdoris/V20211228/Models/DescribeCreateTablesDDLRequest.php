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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCreateTablesDDL request structure.
 *
 * @method string getInstanceId() Obtain Resource ID, TCHouse-D resource ID.
 * @method void setInstanceId(string $InstanceId) Set Resource ID, TCHouse-D resource ID.
 * @method array getDbTablesInfos() Obtain Require the database and table for the table creation DDL.
 * @method void setDbTablesInfos(array $DbTablesInfos) Set Require the database and table for the table creation DDL.
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method boolean getIsBrief() Obtain Whether to hide partition information
 * @method void setIsBrief(boolean $IsBrief) Set Whether to hide partition information
 */
class DescribeCreateTablesDDLRequest extends AbstractModel
{
    /**
     * @var string Resource ID, TCHouse-D resource ID.
     */
    public $InstanceId;

    /**
     * @var array Require the database and table for the table creation DDL.
     */
    public $DbTablesInfos;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var boolean Whether to hide partition information
     */
    public $IsBrief;

    /**
     * @param string $InstanceId Resource ID, TCHouse-D resource ID.
     * @param array $DbTablesInfos Require the database and table for the table creation DDL.
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param boolean $IsBrief Whether to hide partition information
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbTablesInfos",$param) and $param["DbTablesInfos"] !== null) {
            $this->DbTablesInfos = [];
            foreach ($param["DbTablesInfos"] as $key => $value){
                $obj = new DbTablesInfo();
                $obj->deserialize($value);
                array_push($this->DbTablesInfos, $obj);
            }
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("IsBrief",$param) and $param["IsBrief"] !== null) {
            $this->IsBrief = $param["IsBrief"];
        }
    }
}
