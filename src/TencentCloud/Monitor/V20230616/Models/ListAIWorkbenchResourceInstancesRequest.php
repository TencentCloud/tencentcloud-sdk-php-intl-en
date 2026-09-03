<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchResourceInstances request structure.
 *
 * @method string getResourceMapId() Obtain <p>Resource map ID</p>
 * @method void setResourceMapId(string $ResourceMapId) Set <p>Resource map ID</p>
 * @method PageByNumParams getPageParams() Obtain <p>Pagination parameters</p>
 * @method void setPageParams(PageByNumParams $PageParams) Set <p>Pagination parameters</p>
 */
class ListAIWorkbenchResourceInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Resource map ID</p>
     */
    public $ResourceMapId;

    /**
     * @var PageByNumParams <p>Pagination parameters</p>
     */
    public $PageParams;

    /**
     * @param string $ResourceMapId <p>Resource map ID</p>
     * @param PageByNumParams $PageParams <p>Pagination parameters</p>
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
        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("PageParams",$param) and $param["PageParams"] !== null) {
            $this->PageParams = new PageByNumParams();
            $this->PageParams->deserialize($param["PageParams"]);
        }
    }
}
