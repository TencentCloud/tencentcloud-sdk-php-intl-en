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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyOpsOwners request structure.
 *
 * @method array getTaskIdList() Obtain TaskId Array that Needs Updated Responsible Person
 * @method void setTaskIdList(array $TaskIdList) Set TaskId Array that Needs Updated Responsible Person
 * @method string getOwners() Obtain Responsible User Id Information that Needs Updating, Connect Multiple Persons in Charge with ;
 * @method void setOwners(string $Owners) Set Responsible User Id Information that Needs Updating, Connect Multiple Persons in Charge with ;
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class BatchModifyOpsOwnersRequest extends AbstractModel
{
    /**
     * @var array TaskId Array that Needs Updated Responsible Person
     */
    public $TaskIdList;

    /**
     * @var string Responsible User Id Information that Needs Updating, Connect Multiple Persons in Charge with ;
     */
    public $Owners;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param array $TaskIdList TaskId Array that Needs Updated Responsible Person
     * @param string $Owners Responsible User Id Information that Needs Updating, Connect Multiple Persons in Charge with ;
     * @param string $ProjectId Project ID
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("Owners",$param) and $param["Owners"] !== null) {
            $this->Owners = $param["Owners"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
