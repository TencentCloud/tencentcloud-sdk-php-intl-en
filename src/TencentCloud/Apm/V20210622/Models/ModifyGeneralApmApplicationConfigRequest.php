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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGeneralApmApplicationConfig request structure.
 *
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method array getTags() Obtain Fields to be modified. the key and value respectively specify the field name and field value.
.
For specific fields, please refer to.
 * @method void setTags(array $Tags) Set Fields to be modified. the key and value respectively specify the field name and field value.
.
For specific fields, please refer to.
 * @method array getServiceNames() Obtain Name of the application list that requires configuration modification.	
 * @method void setServiceNames(array $ServiceNames) Set Name of the application list that requires configuration modification.	
 */
class ModifyGeneralApmApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var array Fields to be modified. the key and value respectively specify the field name and field value.
.
For specific fields, please refer to.
     */
    public $Tags;

    /**
     * @var array Name of the application list that requires configuration modification.	
     */
    public $ServiceNames;

    /**
     * @param string $InstanceId Business system id.
     * @param array $Tags Fields to be modified. the key and value respectively specify the field name and field value.
.
For specific fields, please refer to.
     * @param array $ServiceNames Name of the application list that requires configuration modification.	
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ServiceNames",$param) and $param["ServiceNames"] !== null) {
            $this->ServiceNames = $param["ServiceNames"];
        }
    }
}
