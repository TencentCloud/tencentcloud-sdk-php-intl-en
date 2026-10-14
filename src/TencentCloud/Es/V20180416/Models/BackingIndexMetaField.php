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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup index metadata field
 *
 * @method string getIndexName() Obtain <p>Backing index name</p>
 * @method void setIndexName(string $IndexName) Set <p>Backing index name</p>
 * @method string getIndexStatus() Obtain <p>Backup index status</p>
 * @method void setIndexStatus(string $IndexStatus) Set <p>Backup index status</p>
 * @method integer getIndexStorage() Obtain <p>Backup index storage size</p>
 * @method void setIndexStorage(integer $IndexStorage) Set <p>Backup index storage size</p>
 * @method string getIndexPhrase() Obtain <p>Backup index current lifecycle</p>
 * @method void setIndexPhrase(string $IndexPhrase) Set <p>Backup index current lifecycle</p>
 * @method string getIndexCreateTime() Obtain <p>Backup index creation time</p>
 * @method void setIndexCreateTime(string $IndexCreateTime) Set <p>Backup index creation time</p>
 * @method string getIndexUuid() Obtain <p>Index Uuid</p>
 * @method void setIndexUuid(string $IndexUuid) Set <p>Index Uuid</p>
 */
class BackingIndexMetaField extends AbstractModel
{
    /**
     * @var string <p>Backing index name</p>
     */
    public $IndexName;

    /**
     * @var string <p>Backup index status</p>
     */
    public $IndexStatus;

    /**
     * @var integer <p>Backup index storage size</p>
     */
    public $IndexStorage;

    /**
     * @var string <p>Backup index current lifecycle</p>
     */
    public $IndexPhrase;

    /**
     * @var string <p>Backup index creation time</p>
     */
    public $IndexCreateTime;

    /**
     * @var string <p>Index Uuid</p>
     */
    public $IndexUuid;

    /**
     * @param string $IndexName <p>Backing index name</p>
     * @param string $IndexStatus <p>Backup index status</p>
     * @param integer $IndexStorage <p>Backup index storage size</p>
     * @param string $IndexPhrase <p>Backup index current lifecycle</p>
     * @param string $IndexCreateTime <p>Backup index creation time</p>
     * @param string $IndexUuid <p>Index Uuid</p>
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("IndexStorage",$param) and $param["IndexStorage"] !== null) {
            $this->IndexStorage = $param["IndexStorage"];
        }

        if (array_key_exists("IndexPhrase",$param) and $param["IndexPhrase"] !== null) {
            $this->IndexPhrase = $param["IndexPhrase"];
        }

        if (array_key_exists("IndexCreateTime",$param) and $param["IndexCreateTime"] !== null) {
            $this->IndexCreateTime = $param["IndexCreateTime"];
        }

        if (array_key_exists("IndexUuid",$param) and $param["IndexUuid"] !== null) {
            $this->IndexUuid = $param["IndexUuid"];
        }
    }
}
