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
 * ModifyTableGroupName request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where a table group resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a table group resides
 * @method string getTableGroupId() Obtain ID of the table group to be renamed
 * @method void setTableGroupId(string $TableGroupId) Set ID of the table group to be renamed
 * @method string getTableGroupName() Obtain New table group name, which can contain letters and symbols
 * @method void setTableGroupName(string $TableGroupName) Set New table group name, which can contain letters and symbols
 */
class ModifyTableGroupNameRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where a table group resides
     */
    public $ClusterId;

    /**
     * @var string ID of the table group to be renamed
     */
    public $TableGroupId;

    /**
     * @var string New table group name, which can contain letters and symbols
     */
    public $TableGroupName;

    /**
     * @param string $ClusterId ID of the cluster where a table group resides
     * @param string $TableGroupId ID of the table group to be renamed
     * @param string $TableGroupName New table group name, which can contain letters and symbols
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

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }
    }
}
