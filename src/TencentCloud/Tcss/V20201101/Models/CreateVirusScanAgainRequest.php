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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVirusScanAgain request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method array getContainerIds() Obtain Set of IDs of containers to be scanned
 * @method void setContainerIds(array $ContainerIds) Set Set of IDs of containers to be scanned
 * @method boolean getTimeoutAll() Obtain Whether to scan all timed-out containers
 * @method void setTimeoutAll(boolean $TimeoutAll) Set Whether to scan all timed-out containers
 * @method integer getTimeout() Obtain New timeout period
 * @method void setTimeout(integer $Timeout) Set New timeout period
 */
class CreateVirusScanAgainRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var array Set of IDs of containers to be scanned
     */
    public $ContainerIds;

    /**
     * @var boolean Whether to scan all timed-out containers
     */
    public $TimeoutAll;

    /**
     * @var integer New timeout period
     */
    public $Timeout;

    /**
     * @param string $TaskId Task ID
     * @param array $ContainerIds Set of IDs of containers to be scanned
     * @param boolean $TimeoutAll Whether to scan all timed-out containers
     * @param integer $Timeout New timeout period
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }

        if (array_key_exists("TimeoutAll",$param) and $param["TimeoutAll"] !== null) {
            $this->TimeoutAll = $param["TimeoutAll"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
