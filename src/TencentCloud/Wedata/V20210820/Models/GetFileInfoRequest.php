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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFileInfo request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getFilePath() Obtain File pathProject Area 1470575647377821696 project, in directory f1: /datastudio/project/1470575647377821696/f1/sql1234.sql Personal Area: /datastudio/personal/sqlTTT.sql
 * @method void setFilePath(string $FilePath) Set File pathProject Area 1470575647377821696 project, in directory f1: /datastudio/project/1470575647377821696/f1/sql1234.sql Personal Area: /datastudio/personal/sqlTTT.sql
 */
class GetFileInfoRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string File pathProject Area 1470575647377821696 project, in directory f1: /datastudio/project/1470575647377821696/f1/sql1234.sql Personal Area: /datastudio/personal/sqlTTT.sql
     */
    public $FilePath;

    /**
     * @param string $ProjectId Project ID
     * @param string $FilePath File pathProject Area 1470575647377821696 project, in directory f1: /datastudio/project/1470575647377821696/f1/sql1234.sql Personal Area: /datastudio/personal/sqlTTT.sql
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

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
