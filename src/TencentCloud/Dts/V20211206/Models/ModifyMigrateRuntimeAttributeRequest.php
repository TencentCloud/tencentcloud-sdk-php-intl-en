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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrateRuntimeAttribute request structure.
 *
 * @method string getJobId() Obtain Migration task id, for example: dts-2rgv0f09
 * @method void setJobId(string $JobId) Set Migration task id, for example: dts-2rgv0f09
 * @method array getOtherOptions() Obtain Attributes that need to be modified. This structure is designed as a generic structure to separate customized attributes for multiple businesses. <br>For instance, for Redis:<br>{<br>	 "Key": "DstWriteMode",	// Target database write mode<br> 	"Value": "normal"	          // clearData (clear target instance data), overwrite (perform task in overwrite manner), normal (follow normal procedure, no additional actions, this is the default value) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	// Whether to set target database as read-only during migration<br/> 	"Value": "true"	          // true (set as read-only), false (do not set as read-only) <br/>}
 * @method void setOtherOptions(array $OtherOptions) Set Attributes that need to be modified. This structure is designed as a generic structure to separate customized attributes for multiple businesses. <br>For instance, for Redis:<br>{<br>	 "Key": "DstWriteMode",	// Target database write mode<br> 	"Value": "normal"	          // clearData (clear target instance data), overwrite (perform task in overwrite manner), normal (follow normal procedure, no additional actions, this is the default value) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	// Whether to set target database as read-only during migration<br/> 	"Value": "true"	          // true (set as read-only), false (do not set as read-only) <br/>}
 */
class ModifyMigrateRuntimeAttributeRequest extends AbstractModel
{
    /**
     * @var string Migration task id, for example: dts-2rgv0f09
     */
    public $JobId;

    /**
     * @var array Attributes that need to be modified. This structure is designed as a generic structure to separate customized attributes for multiple businesses. <br>For instance, for Redis:<br>{<br>	 "Key": "DstWriteMode",	// Target database write mode<br> 	"Value": "normal"	          // clearData (clear target instance data), overwrite (perform task in overwrite manner), normal (follow normal procedure, no additional actions, this is the default value) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	// Whether to set target database as read-only during migration<br/> 	"Value": "true"	          // true (set as read-only), false (do not set as read-only) <br/>}
     */
    public $OtherOptions;

    /**
     * @param string $JobId Migration task id, for example: dts-2rgv0f09
     * @param array $OtherOptions Attributes that need to be modified. This structure is designed as a generic structure to separate customized attributes for multiple businesses. <br>For instance, for Redis:<br>{<br>	 "Key": "DstWriteMode",	// Target database write mode<br> 	"Value": "normal"	          // clearData (clear target instance data), overwrite (perform task in overwrite manner), normal (follow normal procedure, no additional actions, this is the default value) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	// Whether to set target database as read-only during migration<br/> 	"Value": "true"	          // true (set as read-only), false (do not set as read-only) <br/>}
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("OtherOptions",$param) and $param["OtherOptions"] !== null) {
            $this->OtherOptions = [];
            foreach ($param["OtherOptions"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->OtherOptions, $obj);
            }
        }
    }
}
