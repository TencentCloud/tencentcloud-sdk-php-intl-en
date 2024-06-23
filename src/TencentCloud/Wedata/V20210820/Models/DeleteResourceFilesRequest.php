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
 * DeleteResourceFiles request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getUseStatus() Obtain Usage Status
 * @method void setUseStatus(boolean $UseStatus) Set Usage Status
 * @method array getResourceIds() Obtain Resource ID List
 * @method void setResourceIds(array $ResourceIds) Set Resource ID List
 * @method array getFilePaths() Obtain Resource Path List
 * @method void setFilePaths(array $FilePaths) Set Resource Path List
 */
class DeleteResourceFilesRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Usage Status
     */
    public $UseStatus;

    /**
     * @var array Resource ID List
     */
    public $ResourceIds;

    /**
     * @var array Resource Path List
     */
    public $FilePaths;

    /**
     * @param string $ProjectId Project ID
     * @param boolean $UseStatus Usage Status
     * @param array $ResourceIds Resource ID List
     * @param array $FilePaths Resource Path List
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UseStatus",$param) and $param["UseStatus"] !== null) {
            $this->UseStatus = $param["UseStatus"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("FilePaths",$param) and $param["FilePaths"] !== null) {
            $this->FilePaths = $param["FilePaths"];
        }
    }
}
