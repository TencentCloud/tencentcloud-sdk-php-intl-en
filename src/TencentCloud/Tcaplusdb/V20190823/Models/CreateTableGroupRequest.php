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
 * CreateTableGroup request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where a table group resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a table group resides
 * @method string getTableGroupName() Obtain Table group name, which can contain up to 32 letters and digits
 * @method void setTableGroupName(string $TableGroupName) Set Table group name, which can contain up to 32 letters and digits
 * @method string getTableGroupId() Obtain Table group ID, which can be customized but must be unique in one cluster. If it is not specified, the auto-increment mode will be used.
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID, which can be customized but must be unique in one cluster. If it is not specified, the auto-increment mode will be used.
 * @method array getResourceTags() Obtain Table group tag list
 * @method void setResourceTags(array $ResourceTags) Set Table group tag list
 */
class CreateTableGroupRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where a table group resides
     */
    public $ClusterId;

    /**
     * @var string Table group name, which can contain up to 32 letters and digits
     */
    public $TableGroupName;

    /**
     * @var string Table group ID, which can be customized but must be unique in one cluster. If it is not specified, the auto-increment mode will be used.
     */
    public $TableGroupId;

    /**
     * @var array Table group tag list
     */
    public $ResourceTags;

    /**
     * @param string $ClusterId ID of the cluster where a table group resides
     * @param string $TableGroupName Table group name, which can contain up to 32 letters and digits
     * @param string $TableGroupId Table group ID, which can be customized but must be unique in one cluster. If it is not specified, the auto-increment mode will be used.
     * @param array $ResourceTags Table group tag list
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

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
