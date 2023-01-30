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
 * Container asset details
 *
 * @method string getContainerId() Obtain Container ID on the server
 * @method void setContainerId(string $ContainerId) Set Container ID on the server
 * @method string getPodName() Obtain Pod name of the container
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodName(string $PodName) Set Pod name of the container
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComplianceContainerDetailInfo extends AbstractModel
{
    /**
     * @var string Container ID on the server
     */
    public $ContainerId;

    /**
     * @var string Pod name of the container
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodName;

    /**
     * @param string $ContainerId Container ID on the server
     * @param string $PodName Pod name of the container
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }
    }
}
