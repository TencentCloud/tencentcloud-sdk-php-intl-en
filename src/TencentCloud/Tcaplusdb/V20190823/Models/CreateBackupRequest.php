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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where the table to be backed up resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where the table to be backed up resides
 * @method array getSelectedTables() Obtain Information list of tables to be backed up
 * @method void setSelectedTables(array $SelectedTables) Set Information list of tables to be backed up
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where the table to be backed up resides
     */
    public $ClusterId;

    /**
     * @var array Information list of tables to be backed up
     */
    public $SelectedTables;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param string $ClusterId ID of the cluster where the table to be backed up resides
     * @param array $SelectedTables Information list of tables to be backed up
     * @param string $Remark Remarks
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
