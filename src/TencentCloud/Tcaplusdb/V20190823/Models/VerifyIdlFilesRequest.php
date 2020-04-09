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
 * VerifyIdlFiles request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where to create a table
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where to create a table
 * @method string getTableGroupId() Obtain ID of the table group where to create a table
 * @method void setTableGroupId(string $TableGroupId) Set ID of the table group where to create a table
 * @method array getExistingIdlFiles() Obtain List of information of uploaded IDL files. Either this parameter or `NewIdlFiles` must be present
 * @method void setExistingIdlFiles(array $ExistingIdlFiles) Set List of information of uploaded IDL files. Either this parameter or `NewIdlFiles` must be present
 * @method array getNewIdlFiles() Obtain List of information of IDL files to be uploaded. Either this parameter or `ExistingIdlFiles` must be present
 * @method void setNewIdlFiles(array $NewIdlFiles) Set List of information of IDL files to be uploaded. Either this parameter or `ExistingIdlFiles` must be present
 */
class VerifyIdlFilesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where to create a table
     */
    public $ClusterId;

    /**
     * @var string ID of the table group where to create a table
     */
    public $TableGroupId;

    /**
     * @var array List of information of uploaded IDL files. Either this parameter or `NewIdlFiles` must be present
     */
    public $ExistingIdlFiles;

    /**
     * @var array List of information of IDL files to be uploaded. Either this parameter or `ExistingIdlFiles` must be present
     */
    public $NewIdlFiles;

    /**
     * @param string $ClusterId ID of the cluster where to create a table
     * @param string $TableGroupId ID of the table group where to create a table
     * @param array $ExistingIdlFiles List of information of uploaded IDL files. Either this parameter or `NewIdlFiles` must be present
     * @param array $NewIdlFiles List of information of IDL files to be uploaded. Either this parameter or `ExistingIdlFiles` must be present
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

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("ExistingIdlFiles",$param) and $param["ExistingIdlFiles"] !== null) {
            $this->ExistingIdlFiles = [];
            foreach ($param["ExistingIdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->ExistingIdlFiles, $obj);
            }
        }

        if (array_key_exists("NewIdlFiles",$param) and $param["NewIdlFiles"] !== null) {
            $this->NewIdlFiles = [];
            foreach ($param["NewIdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->NewIdlFiles, $obj);
            }
        }
    }
}
