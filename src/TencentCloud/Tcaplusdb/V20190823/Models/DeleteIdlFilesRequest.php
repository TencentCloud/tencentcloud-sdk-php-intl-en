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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIdlFiles request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where IDL resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where IDL resides
 * @method array getIdlFiles() Obtain List of information of IDL files to be deleted
 * @method void setIdlFiles(array $IdlFiles) Set List of information of IDL files to be deleted
 */
class DeleteIdlFilesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where IDL resides
     */
    public $ClusterId;

    /**
     * @var array List of information of IDL files to be deleted
     */
    public $IdlFiles;

    /**
     * @param string $ClusterId ID of the cluster where IDL resides
     * @param array $IdlFiles List of information of IDL files to be deleted
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

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }
    }
}
