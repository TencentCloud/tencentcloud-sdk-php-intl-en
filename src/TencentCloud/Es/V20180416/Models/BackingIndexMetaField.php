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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backing index metadata fields
 *
 * @method string getIndexName() Obtain Backing index name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexName(string $IndexName) Set Backing index name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIndexStatus() Obtain Backing index status
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexStatus(string $IndexStatus) Set Backing index status
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getIndexStorage() Obtain Backing index size
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexStorage(integer $IndexStorage) Set Backing index size
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIndexPhrase() Obtain Current lifecycle phase of backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexPhrase(string $IndexPhrase) Set Current lifecycle phase of backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIndexCreateTime() Obtain Backing index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIndexCreateTime(string $IndexCreateTime) Set Backing index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class BackingIndexMetaField extends AbstractModel
{
    /**
     * @var string Backing index name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexName;

    /**
     * @var string Backing index status
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexStatus;

    /**
     * @var integer Backing index size
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexStorage;

    /**
     * @var string Current lifecycle phase of backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexPhrase;

    /**
     * @var string Backing index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IndexCreateTime;

    /**
     * @param string $IndexName Backing index name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IndexStatus Backing index status
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $IndexStorage Backing index size
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IndexPhrase Current lifecycle phase of backing index
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IndexCreateTime Backing index creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
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
    }
}
