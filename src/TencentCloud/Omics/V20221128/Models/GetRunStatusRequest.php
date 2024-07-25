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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRunStatus request structure.
 *
 * @method string getRunUuid() Obtain Run UUID
 * @method void setRunUuid(string $RunUuid) Set Run UUID
 * @method string getProjectId() Obtain Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method void setProjectId(string $ProjectId) Set Project ID
(If you leave it blank, the default item in the specified region will be used.)
 */
class GetRunStatusRequest extends AbstractModel
{
    /**
     * @var string Run UUID
     */
    public $RunUuid;

    /**
     * @var string Project ID
(If you leave it blank, the default item in the specified region will be used.)
     */
    public $ProjectId;

    /**
     * @param string $RunUuid Run UUID
     * @param string $ProjectId Project ID
(If you leave it blank, the default item in the specified region will be used.)
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
        if (array_key_exists("RunUuid",$param) and $param["RunUuid"] !== null) {
            $this->RunUuid = $param["RunUuid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
