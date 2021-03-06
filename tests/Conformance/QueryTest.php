<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tests.QueryTest</code>
 */
class QueryTest extends \Google\Protobuf\Internal\Message
{
    /**
     * path of collection, e.g. "projects/projectID/databases/(default)/documents/C"
     *
     * Generated from protobuf field <code>string coll_path = 1;</code>
     */
    private $coll_path = '';
    /**
     * Generated from protobuf field <code>repeated .tests.Clause clauses = 2;</code>
     */
    private $clauses;
    /**
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery query = 3;</code>
     */
    private $query = null;
    /**
     * Generated from protobuf field <code>bool is_error = 4;</code>
     */
    private $is_error = false;

    public function __construct() {
        \Google\Cloud\Firestore\Tests\Conformance\FirestoreTestGpb::initOnce();
        parent::__construct();
    }

    /**
     * path of collection, e.g. "projects/projectID/databases/(default)/documents/C"
     *
     * Generated from protobuf field <code>string coll_path = 1;</code>
     * @return string
     */
    public function getCollPath()
    {
        return $this->coll_path;
    }

    /**
     * path of collection, e.g. "projects/projectID/databases/(default)/documents/C"
     *
     * Generated from protobuf field <code>string coll_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCollPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->coll_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .tests.Clause clauses = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClauses()
    {
        return $this->clauses;
    }

    /**
     * Generated from protobuf field <code>repeated .tests.Clause clauses = 2;</code>
     * @param \Google\Cloud\Firestore\Tests\Conformance\Clause[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClauses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Tests\Conformance\Clause::class);
        $this->clauses = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery query = 3;</code>
     * @return \Google\Cloud\Firestore\V1beta1\StructuredQuery
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery query = 3;</code>
     * @param \Google\Cloud\Firestore\V1beta1\StructuredQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\StructuredQuery::class);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_error = 4;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->is_error;
    }

    /**
     * Generated from protobuf field <code>bool is_error = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->is_error = $var;

        return $this;
    }

}

