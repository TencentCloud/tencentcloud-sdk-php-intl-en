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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Restoration task
 *
 * @method integer getRestoreTaskId() Obtain Restoration task ID
 * @method void setRestoreTaskId(integer $RestoreTaskId) Set Restoration task ID
 * @method string getFilePath() Obtain Restoration task file path
 * @method void setFilePath(string $FilePath) Set Restoration task file path
 * @method integer getType() Obtain Restoration task type (`1`: standard; `2`: expedited; `3`: bulk, with only the expedited type available currently)
 * @method void setType(integer $Type) Set Restoration task type (`1`: standard; `2`: expedited; `3`: bulk, with only the expedited type available currently)
 * @method integer getDays() Obtain Validity period (in days) of the temporary copy generated during restoration
 * @method void setDays(integer $Days) Set Validity period (in days) of the temporary copy generated during restoration
 * @method integer getStatus() Obtain Restoration task status (1: binding file; 2: file binding completed; 3: restoring file; 4: file restoration completed)
 * @method void setStatus(integer $Status) Set Restoration task status (1: binding file; 2: file binding completed; 3: restoring file; 4: file restoration completed)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var integer Restoration task ID
     */
    public $RestoreTaskId;

    /**
     * @var string Restoration task file path
     */
    public $FilePath;

    /**
     * @var integer Restoration task type (`1`: standard; `2`: expedited; `3`: bulk, with only the expedited type available currently)
     */
    public $Type;

    /**
     * @var integer Validity period (in days) of the temporary copy generated during restoration
     */
    public $Days;

    /**
     * @var integer Restoration task status (1: binding file; 2: file binding completed; 3: restoring file; 4: file restoration completed)
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param integer $RestoreTaskId Restoration task ID
     * @param string $FilePath Restoration task file path
     * @param integer $Type Restoration task type (`1`: standard; `2`: expedited; `3`: bulk, with only the expedited type available currently)
     * @param integer $Days Validity period (in days) of the temporary copy generated during restoration
     * @param integer $Status Restoration task status (1: binding file; 2: file binding completed; 3: restoring file; 4: file restoration completed)
     * @param string $CreateTime Creation time
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
        if (array_key_exists("RestoreTaskId",$param) and $param["RestoreTaskId"] !== null) {
            $this->RestoreTaskId = $param["RestoreTaskId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
