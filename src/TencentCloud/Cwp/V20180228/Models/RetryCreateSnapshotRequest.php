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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RetryCreateSnapshot request structure.
 *
 * @method integer getFixId() Obtain Fix task ID
 * @method void setFixId(integer $FixId) Set Fix task ID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getId() Obtain Unique ID of the snapshot returned by the task progress
 * @method void setId(integer $Id) Set Unique ID of the snapshot returned by the task progress
 */
class RetryCreateSnapshotRequest extends AbstractModel
{
    /**
     * @var integer Fix task ID
     */
    public $FixId;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer Unique ID of the snapshot returned by the task progress
     */
    public $Id;

    /**
     * @param integer $FixId Fix task ID
     * @param string $Quuid Host QUUID
     * @param integer $Id Unique ID of the snapshot returned by the task progress
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
        if (array_key_exists("FixId",$param) and $param["FixId"] !== null) {
            $this->FixId = $param["FixId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
