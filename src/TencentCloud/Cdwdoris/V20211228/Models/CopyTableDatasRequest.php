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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyTableDatas request structure.
 *
 * @method string getInstanceId() Obtain Resource ID, which is the TCHouse-D resource ID used for table creation.
 * @method void setInstanceId(string $InstanceId) Set Resource ID, which is the TCHouse-D resource ID used for table creation.
 * @method string getCopiedFromDb() Obtain Name of the database where the source table is located.
 * @method void setCopiedFromDb(string $CopiedFromDb) Set Name of the database where the source table is located.
 * @method string getCopiedFromTable() Obtain Source table name
 * @method void setCopiedFromTable(string $CopiedFromTable) Set Source table name
 * @method string getCopyToDb() Obtain Name of the database where the target table is located
 * @method void setCopyToDb(string $CopyToDb) Set Name of the database where the target table is located
 * @method string getCopyToTable() Obtain Target table name. If the table already exists, the structure of the source table and target table should be the same.
 * @method void setCopyToTable(string $CopyToTable) Set Target table name. If the table already exists, the structure of the source table and target table should be the same.
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method boolean getIsDataOverwrite() Obtain Whether the data in the target table is overwritten. The default value is False.
 * @method void setIsDataOverwrite(boolean $IsDataOverwrite) Set Whether the data in the target table is overwritten. The default value is False.
 */
class CopyTableDatasRequest extends AbstractModel
{
    /**
     * @var string Resource ID, which is the TCHouse-D resource ID used for table creation.
     */
    public $InstanceId;

    /**
     * @var string Name of the database where the source table is located.
     */
    public $CopiedFromDb;

    /**
     * @var string Source table name
     */
    public $CopiedFromTable;

    /**
     * @var string Name of the database where the target table is located
     */
    public $CopyToDb;

    /**
     * @var string Target table name. If the table already exists, the structure of the source table and target table should be the same.
     */
    public $CopyToTable;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var boolean Whether the data in the target table is overwritten. The default value is False.
     */
    public $IsDataOverwrite;

    /**
     * @param string $InstanceId Resource ID, which is the TCHouse-D resource ID used for table creation.
     * @param string $CopiedFromDb Name of the database where the source table is located.
     * @param string $CopiedFromTable Source table name
     * @param string $CopyToDb Name of the database where the target table is located
     * @param string $CopyToTable Target table name. If the table already exists, the structure of the source table and target table should be the same.
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param boolean $IsDataOverwrite Whether the data in the target table is overwritten. The default value is False.
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

        if (array_key_exists("CopiedFromDb",$param) and $param["CopiedFromDb"] !== null) {
            $this->CopiedFromDb = $param["CopiedFromDb"];
        }

        if (array_key_exists("CopiedFromTable",$param) and $param["CopiedFromTable"] !== null) {
            $this->CopiedFromTable = $param["CopiedFromTable"];
        }

        if (array_key_exists("CopyToDb",$param) and $param["CopyToDb"] !== null) {
            $this->CopyToDb = $param["CopyToDb"];
        }

        if (array_key_exists("CopyToTable",$param) and $param["CopyToTable"] !== null) {
            $this->CopyToTable = $param["CopyToTable"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("IsDataOverwrite",$param) and $param["IsDataOverwrite"] !== null) {
            $this->IsDataOverwrite = $param["IsDataOverwrite"];
        }
    }
}
