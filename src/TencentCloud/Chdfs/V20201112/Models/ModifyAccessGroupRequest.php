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
 * ModifyAccessGroup request structure.
 *
 * @method string getAccessGroupId() Obtain Permission group ID
 * @method void setAccessGroupId(string $AccessGroupId) Set Permission group ID
 * @method string getAccessGroupName() Obtain Permission group name
 * @method void setAccessGroupName(string $AccessGroupName) Set Permission group name
 * @method string getDescription() Obtain Permission group description
 * @method void setDescription(string $Description) Set Permission group description
 */
class ModifyAccessGroupRequest extends AbstractModel
{
    /**
     * @var string Permission group ID
     */
    public $AccessGroupId;

    /**
     * @var string Permission group name
     */
    public $AccessGroupName;

    /**
     * @var string Permission group description
     */
    public $Description;

    /**
     * @param string $AccessGroupId Permission group ID
     * @param string $AccessGroupName Permission group name
     * @param string $Description Permission group description
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
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }

        if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
            $this->AccessGroupName = $param["AccessGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
